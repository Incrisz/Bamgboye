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
use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::latest()->get();
        return view('backend.media.one.video.all',compact('videos'));
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
        return view('backend.media.one.video.create',compact('categories','tags'));
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
            'video' => 'required',
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

            if(!Storage::disk('public')->exists('video/image/'))
            {
                Storage::disk('public')->makeDirectory('video/image/');
            }

            $videoImage = Image::make($image)->save();
            Storage::disk('public')->put('video/image/'.$imageName,$videoImage);

        } else {
            $imageName = "default.png";
        }

////Uploading video
        $video = $request->video;
         if(isset($video))
         {
 //            make unipue name for video
             $currentDate = Carbon::now()->toDateString();
             $videoName  =$hidurl.'-'.$currentDate.'-'.uniqid().'.'.$video->getClientOriginalExtension();
 
             if(!Storage::disk('public')->exists('video/vid'))
             {
                 Storage::disk('public')->makeDirectory('video/vid');
             }
             $video->move('storage/video/vid', $videoName);
           
 
         } else {
             $videoName = "default.vid";
         }
       

        $video = new Video();
       // $video->user_id = Auth::id();
        $video->title = $request->title;
        $video->caption = $request->caption;
        $video->duration = $request->duration;
        //$video->slug = $slug;
        $video->video = $videoName;
         $video->image = $imageName;
        $video->body = $request->body;
        if(isset($request->publish))
        {
            $video->publish = true;
        }else {
            $video->publish = false;
        }
        if(isset($request->editor))
        {
            $video->editor = true;
        }else {
            $video->editor = false;
        }
       
        $video->save();

       $video->categories()->attach($request->categories);
        $video->tags()->attach($request->tags);


        Toastr::success('video Successfully Saved :)','Success');
        return redirect()->route('video.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('backend.media.one.video.show',compact('video','categories','tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('backend.media.one.video.edit',compact('video','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $this->validate($request,[
            'title' => 'required',
           // 'text' => 'required',
            'image' => 'required',
            'video' => 'required',
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

            if(!Storage::disk('public')->exists('video/image/'))
            {
                Storage::disk('public')->makeDirectory('video/image/');
            }
             //            delete old post image
             if (Storage::disk('public')->exists('video/image/'.$video->image))
             {
                 Storage::disk('public')->delete('video/image/'.$video->image);
             }

            $videoImage = Image::make($image)->save();
            Storage::disk('public')->put('video/image/'.$imageName,$videoImage);

        } else {
            $imageName = "default.png";
        }

////Uploading video
        $videos = $request->video;
         if(isset($video))
         {
 //            make unipue name for video
             $currentDate = Carbon::now()->toDateString();
             $videoName  =$hidurl.'-'.$currentDate.'-'.uniqid().'.'.$videos->getClientOriginalExtension();
 
             if(!Storage::disk('public')->exists('video/vid'))
             {
                 Storage::disk('public')->makeDirectory('video/vid');
             }
                 //            delete old post image
                 if (Storage::disk('public')->exists('video/vid/'.$video->video))
        {
            Storage::disk('public')->delete('video/vid/'.$video->video);
        }
             $videos->move('storage/video/vid/', $videoName);
           
 
         } else {
             $videoName = "default.vid";
         }
       

     
       // $video->user_id = Auth::id();
        $video->title = $request->title;
        $video->caption = $request->caption;
        $video->duration = $request->duration;
        //$video->slug = $slug;
        if(isset($video))
        {
        $video->video = $videoName;
        }
        if(isset($image))
        {
         $video->image = $imageName;
        }
        $video->body = $request->body;
        if(isset($request->publish))
        {
            $video->publish = true;
        }else {
            $video->publish = false;
        }
        if(isset($request->editor))
        {
            $video->editor = true;
        }else {
            $video->editor = false;
        }
       
        $video->save();

       $video->categories()->sync($request->categories);
        $video->tags()->sync($request->tags);

        Toastr::success('video Successfully Updated :)','Success');
        return redirect()->route('video.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        if (Storage::disk('public')->exists('video/image/'.$video->image))
        {
            Storage::disk('public')->delete('video/image/'.$video->image);
        }
        if (Storage::disk('public')->exists('video/vid/'.$video->video))
        {
            Storage::disk('public')->delete('video/vid/'.$video->video);
        }
        $video->categories()->detach();
        $video->tags()->detach();
        $video->delete();
        Toastr::success('video Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
