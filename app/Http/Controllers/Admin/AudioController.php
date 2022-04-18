<?php

namespace App\Http\Controllers\Admin;


use App\Models\Tag;
use App\Models\Category;
use App\Models\Blog;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\Audio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $audios = Audio::latest()->get();
        return view('backend.media.one.audio.all',compact('audios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('backend.media.one.audio.create',compact('categories','tags'));
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
            'audio' => 'required',
            'caption' => 'required',
            'duration' => 'required',
           // 'categories' => 'required',
            'tags' => 'required',
            'body' => 'required',
        ]);
    
 ////Uploading Image
        $image = $request->image;
       $hidurl = str_slug($request->title);
        if(isset($image))
        {
//            make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $hidurl.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('audio/image/'))
            {
                Storage::disk('public')->makeDirectory('audio/image/');
            }

            $audioImage = Image::make($image)->save();
            Storage::disk('public')->put('audio/image/'.$imageName,$audioImage);

        } else {
            $imageName = "default.png";
        }

////Uploading audio
        $audio = $request->audio;
         if(isset($audio))
         {
 //            make unipue name for audio
             $currentDate = Carbon::now()->toDateString();
             $audioName  =$hidurl.'-'.$currentDate.'-'.uniqid().'.'.$audio->getClientOriginalExtension();
 
             if(!Storage::disk('public')->exists('audio/mp3'))
             {
                 Storage::disk('public')->makeDirectory('audio/mp3');
             }
             $audio->move('storage/audio/mp3', $audioName);
           
 
         } else {
             $audioName = "default.mp3";
         }
       

        $audio = new Audio();
       // $audio->user_id = Auth::id();
        $audio->title = $request->title;
        $audio->caption = $request->caption;
        $audio->duration = $request->duration;
        //$audio->slug = $slug;
        $audio->audio = $audioName;
         $audio->image = $imageName;
        $audio->body = $request->body;
        if(isset($request->publish))
        {
            $audio->publish = true;
        }else {
            $audio->publish = false;
        }
        if(isset($request->editor))
        {
            $audio->editor = true;
        }else {
            $audio->editor = false;
        }
       
        $audio->save();

       $audio->categories()->attach($request->categories);
        $audio->tags()->attach($request->tags);


        Toastr::success('Audio Successfully Saved :)','Success');
        return redirect()->route('audio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Audio  $audio
     * @return \Illuminate\Http\Response
     */
    public function show(Audio $audio)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('backend.media.one.audio.show',compact('audio','categories','tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Audio  $audio
     * @return \Illuminate\Http\Response
     */
    public function edit(Audio $audio)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('backend.media.one.audio.edit',compact('audio','categories','tags'));
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Audio  $audio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Audio $audio)
    {
        $this->validate($request,[
            'title' => 'required',
           // 'text' => 'required',
            'image' => 'required',
            'audio' => 'required',
          //  'caption' => 'required',
           // 'duration' => 'required',
           // 'categories' => 'required',
            'tags' => 'required',
            'body' => 'required',
        ]);
    
 ////Uploading Image
        $image = $request->image;
       $hidurl = str_slug($request->title);
        if(isset($image))
        {
//            make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $hidurl.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('audio/image/'))
            {
                Storage::disk('public')->makeDirectory('audio/image/');
            }
             //            delete old post image
             if (Storage::disk('public')->exists('audio/image/'.$audio->image))
             {
                 Storage::disk('public')->delete('audio/image/'.$audio->image);
             }

            $audioImage = Image::make($image)->save();
            Storage::disk('public')->put('audio/image/'.$imageName,$audioImage);

        } else {
            $imageName = "default.png";
        }

////Uploading audio
        $audios = $request->audio;
         if(isset($audio))
         {
 //            make unipue name for audio
             $currentDate = Carbon::now()->toDateString();
             $audioName  =$hidurl.'-'.$currentDate.'-'.uniqid().'.'.$audios->getClientOriginalExtension();
 
             if(!Storage::disk('public')->exists('audio/mp3'))
             {
                 Storage::disk('public')->makeDirectory('audio/mp3');
             }
                 //            delete old post image
                 if (Storage::disk('public')->exists('audio/mp3/'.$audio->audio))
        {
            Storage::disk('public')->delete('audio/mp3/'.$audio->audio);
        }
             $audios->move('storage/audio/mp3/', $audioName);
           
 
         }

     
       // $audio->user_id = Auth::id();
        $audio->title = $request->title;
        $audio->caption = $request->caption;
        $audio->duration = $request->duration;
        //$audio->slug = $slug;
        if(isset($audio))
        {
        $audio->audio = $audioName;
        }
        if(isset($image))
        {
         $audio->image = $imageName;
        }
        $audio->body = $request->body;
        if(isset($request->publish))
        {
            $audio->publish = true;
        }else {
            $audio->publish = false;
        }
        if(isset($request->editor))
        {
            $audio->editor = true;
        }else {
            $audio->editor = false;
        }
       
        $audio->save();

       $audio->categories()->sync($request->categories);
        $audio->tags()->sync($request->tags);

        Toastr::success('audio Successfully Updated :)','Success');
        return redirect()->route('audio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Audio  $audio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Audio $audio)
    {
        if (Storage::disk('public')->exists('audio/image/'.$audio->image))
        {
            Storage::disk('public')->delete('audio/image/'.$audio->image);
        }
        if (Storage::disk('public')->exists('audio/mp3/'.$audio->audio))
        {
            Storage::disk('public')->delete('audio/mp3/'.$audio->audio);
        }
        $audio->categories()->detach();
        $audio->tags()->detach();
        $audio->delete();
        Toastr::success('Audio Successfully Deleted :)','Success');
        return redirect()->back();
    
    }
}
