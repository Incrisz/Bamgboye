@extends('layouts.backend')

@section('title', 'Edit_Blog')

@section('content')

<div class="page-wrapper">
			<div class="page-content">

				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Media</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Edit Blog</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
                        <div class="ms-auto"><a href="{{route('blog.index')}}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-arrow"></i>Go Back</a></div>
							
						</div>
					</div>
				</div>
				<!--end breadcrumb-->

              <div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">Edit Blog</h5>
					  <hr/>
                       <div class="form-body mt-4">
					    <div class="row">
						   <div class="col-lg-8">
                           <div class="border border-3 p-4 rounded">
        <form action="{{ route('blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
		@csrf
            @method('PUT')
							<div class="mb-3">
								<label for="inputProductTitle" class="form-label">Blog Title</label>
								<input type="text" class="form-control" name="title" value="{{ $blog->title }}" id="inputProductTitle" placeholder="Enter product title">
							  </div>
							  <div class="mb-3">
								<label for="inputProductDescription" class="form-label">Description</label>
								<textarea class="form-control"  name="body" value="{{ $blog->body }}" id="inputProductDescription" rows="3">{{ $blog->body }}</textarea>
							  </div>
							  <div class="mb-3">
								<label for="inputProductDescription" class="form-label">Blog Image</label>
								<input id="image-uploadify"  name='image' value="" type="file" accept="" multiple>
							  </div>
                            </div>
						   </div>
						   <div class="col-lg-4">
							<div class="border border-3 p-4 rounded">
                              <div class="row g-3">
							
                                  
							
									<div class="mb-3 {{ $errors->has('tags') ? 'focused error' : '' }}">
										<label class="form-label">Tags</label>
										<select class="multiple-select" name="tags[]" data-placeholder="Choose anything"  multiple="multiple">
										@foreach($tags as $tag)
											<option @foreach($blog->tags as $blogTag)
                                                        {{ $blogTag->id == $tag->id ? 'selected' :'' }}
                                                    @endforeach
                                                    value="{{ $tag->id }}">
													{{ $tag->name }}
											
											</option>
										@endforeach
						
										</select>
									</div>

									<div class="mb-3 {{ $errors->has('categories') ? 'focused error' : '' }}">
										<label class="form-label">Category</label>
										<select class="multiple-select" name="categories[]" data-placeholder="Choose anything"  multiple="multiple">
										@foreach($categories as $category)
											<option
											@foreach($blog->categories as $blogCategory)
                                                    {{ $blogCategory->id == $category->id ? 'selected' : '' }}
                                                @endforeach
                                                value="{{ $category->id }}">
												{{ $category->name }}
											
											
											</option>
										
											@endforeach
										</select>
									</div>
							

                               
								<div class="form-check">
									<input class="form-check-input" type="checkbox"  id="flexCheckChecked" name="editor" value="{{ $blog->editor}}" {{ $blog->editor == true ? 'checked' : '' }} >
									<label class="form-check-label" for="flexCheckChecked">Edited by Cheif-Editor</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="flexCheckDefault" name="publish" value="{{ $blog->publish }}" {{ $blog->publish == true ? 'checked' : '' }}>
									<label class="form-check-label" for="flexCheckDefault">Publish</label>
								</div>
								  <div class="col-12">
									  <div class="d-grid">
                                         <button type="submit" class="btn btn-primary">Update Blog</button>
									  </div>
								  </div>
								  </form>
							  </div> 
						  </div>
						  </div>
					   </div><!--end row-->
					</div>
				  </div>
				
			  </div>

			</div>
		</div>

@section('content')