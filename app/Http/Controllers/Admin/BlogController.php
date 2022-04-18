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
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $blogs = Blog::latest()->get();
        return view('backend.media.one.blog.all',compact('blogs'));
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
        return view('backend.media.one.blog.create',compact('categories','tags'));
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
           // 'categories' => 'required',
            'tags' => 'required',
            'body' => 'required',
        ]);
    
        $image = $request->image;
       $hidurl = str_slug($request->title);
        if(isset($image))
        {
//            make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $hidurl.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('blog'))
            {
                Storage::disk('public')->makeDirectory('blog');
            }

            $blogImage = Image::make($image)->save();
            Storage::disk('public')->put('blog/'.$imageName,$blogImage);

        } else {
            $imageName = "default.png";
        }
        $blog = new Blog();
       // $blog->user_id = Auth::id();
        $blog->title = $request->title;
        //$blog->slug = $slug;
        if(isset($image))
        {
         $blog->image = $imageName;
        }
        $blog->body = $request->body;
        if(isset($request->publish))
        {
            $blog->publish = true;
        }else {
            $blog->publish = false;
        }
        if(isset($request->editor))
        {
            $blog->editor = true;
        }else {
            $blog->editor = false;
        }
       
        $blog->save();

       $blog->categories()->attach($request->categories);
        $blog->tags()->attach($request->tags);


        Toastr::success('blog Successfully Saved :)','Success');
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $categories = Category::all();
        $tags = Tag::all();
        //$blog = Blog::all();
        return view('backend.media.one.blog.show',compact('blog','categories','tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
       // $blog = Blog::all();
        $categories = Category::all();
        $tags = Tag::all();
        return view('backend.media.one.blog.edit',compact('blog','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $this->validate($request,[
            'title' => 'required',
           // 'text' => 'required',
           'image' => 'required',
           // 'categories' => 'required',
            'tags' => 'required',
            'body' => 'required',
        ]);
    
        $image = $request->image;
       $hidurl = str_slug($request->title);
        if(isset($image))
        {
//            make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $hidurl.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('blog'))
            {
                Storage::disk('public')->makeDirectory('blog');
            }
            
            //            delete old post image
            if (Storage::disk('public')->exists('blog/'.$blog->image))
        {
            Storage::disk('public')->delete('blog/'.$blog->image);
        }

            $blogImage = Image::make($image)->save();
            Storage::disk('public')->put('blog/'.$imageName,$blogImage);

        } else {
            $imageName = "";
        }
       
       // $blog->user_id = Auth::id();
        $blog->title = $request->title;
        //$blog->slug = $slug;
         $blog->image = $imageName;
        $blog->body = $request->body;
        if(isset($request->publish))
        {
            $blog->publish = true;
        }else {
            $blog->publish = false;
        } 

        if (isset($request->editor)) {
            $blog->editor = true;
            
        }else {
            $blog->editor = false;
        }
        
        $blog->save();

        $blog->categories()->sync($request->categories);
        $blog->tags()->sync($request->tags);


        Toastr::success('blog Successfully Updated :)','Success');
        return redirect()->route('blog.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if (Storage::disk('public')->exists('blog/'.$blog->image))
        {
            Storage::disk('public')->delete('blog/'.$blog->image);
        }
        $blog->categories()->detach();
        $blog->tags()->detach();
        $blog->delete();
        Toastr::success('blog Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
