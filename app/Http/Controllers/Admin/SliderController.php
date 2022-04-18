<?php

namespace App\Http\Controllers\Admin;


use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

use App\Http\Controllers\Controller;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('backend.home.slider.all',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('backend.home.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
           // 'text' => 'required',
            'image' => 'required',
            'caption' => 'required',
          
            'body' => 'required',
        ]);
    
        $image = $request->image;
       $hidurl = str_slug($request->title);
        if(isset($image))
        {
//            make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $hidurl.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('slider'))
            {
                Storage::disk('public')->makeDirectory('slider');
            }

            $sliderImage = Image::make($image)->save();
            Storage::disk('public')->put('slider/'.$imageName,$sliderImage);

        } else {
            $imageName = "default.png";
        }
        $slider = new Slider();
       // $slider->user_id = Auth::id();
        $slider->title = $request->title;
        $slider->caption = $request->caption;
        //$slider->slug = $slug;
         $slider->image = $imageName;
        $slider->body = $request->body;
        if(isset($request->publish))
        {
            $slider->publish = true;
        }else {
            $slider->publish = false;
        }
        if(isset($request->editor))
        {
            $slider->editor = true;
        }else {
            $slider->editor = false;
        }
       
        $slider->save();

    

        Toastr::success('slider Successfully Saved :)','Success');
        return redirect()->route('slider.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        return view('backend.home.slider.show',compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    { 
        return view('backend.home.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $this->validate($request,[
            'title' => 'required',
           'caption' => 'required',
           //'image' => 'required',
    
            'body' => 'required',
        ]);
    
        $image = $request->image;
       $hidurl = str_slug($request->title);
        if(isset($image))
        {
//            make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $hidurl.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('slider'))
            {
                Storage::disk('public')->makeDirectory('slider');
            }
            
            //            delete old post image
            if (Storage::disk('public')->exists('slider/'.$slider->image))
        {
            Storage::disk('public')->delete('slider/'.$slider->image);
        }

            $sliderImage = Image::make($image)->save();
            Storage::disk('public')->put('slider/'.$imageName,$sliderImage);

        } 
       
       // $slider->user_id = Auth::id();
        $slider->title = $request->title;
        $slider->caption = $request->caption;
        //$slider->slug = $slug;
        if(isset($image))
        {
         $slider->image = $imageName;
        }
        $slider->body = $request->body;
        if(isset($request->publish))
        {
            $slider->publish = true;
        }else {
            $slider->publish = false;
        } 

        if (isset($request->editor)) {
            $slider->editor = true;
            
        }else {
            $slider->editor = false;
        }
        
        $slider->save();

      


        Toastr::success('slider Successfully Updated :)','Success');
        return redirect()->route('slider.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        if (Storage::disk('public')->exists('slider/'.$slider->image))
        {
            Storage::disk('public')->delete('slider/'.$slider->image);
        }
   
        $slider->delete();
        Toastr::success('slider Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
