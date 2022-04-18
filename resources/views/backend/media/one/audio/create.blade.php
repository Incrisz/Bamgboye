@extends('layouts.backend')

@section('title', 'Upload_Audio')

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
								<li class="breadcrumb-item active" aria-current="page">Add New Audio</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
						<div class="ms-auto"><a href="{{route('audio.index')}}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-arrow"></i>Go Back</a></div>
							
						</div>
					</div>
				</div>
				<!--end breadcrumb-->

              <div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">Add New Audio</h5>
					  <hr/>
                       <div class="form-body mt-4">
					    <div class="row">
						   <div class="col-lg-8">
                           <div class="border border-3 p-4 rounded">

						   <form action="{{ route('audio.store') }}" method="POST" enctype="multipart/form-data">
				@method('POST')
				@csrf
							<div class="mb-3">
								<label for="inputProductTitle" class="form-label">Audio Title</label>
								<input type="text" class="form-control" id="inputProductTitle" name="title" placeholder="Enter product title">
							  </div>
							  <div class="mb-3">
								<label for="inputProductDescription" class="form-label">Description</label>
								<textarea class="form-control" name="body" id="inputProductDescription" rows="3"></textarea>
							  </div>
							  <div class="mb-3">
								<label for="inputProductDescription" class="form-label">Audio File</label>
								<input id="image-uploadify" type="file" name="audio" accept="" multiple>
							  </div>
                            </div>
						   </div>
						   <div class="col-lg-4">
							<div class="border border-3 p-4 rounded">
                              <div class="row g-3">
								<div class="col-md-12">
									<label for="inputPrice" class="form-label">Duration</label>
									<input type="tel" name="duration" class="form-control" id="inputPrice" placeholder="00.00">
								  </div>
								  <div class="col-md-12">
									<label for="inputCompareatprice" class="form-label">Audio Caption</label>
									<input type="text" name="caption" class="form-control" id="inputCompareatprice" placeholder="">
								  </div>
								  <div class="col-md-12">
								  <label class="form-label">Thumbnail</label>
										<input type="file" name="image" class="form-control">
								  </div>
					
								  <div class="mb-3 {{ $errors->has('tags') ? 'focused error' : '' }}">
										<label class="form-label">Tags</label>
										<select name="tags[]" class="multiple-select" data-placeholder="Choose anything"  multiple="multiple">
										@foreach($tags as $tag)
											<option value="{{ $tag->id }}">{{ $tag->name }}</option>
											@endforeach
						
										</select>
									</div>
									<div class="mb-3 {{ $errors->has('categories') ? 'focused error' : '' }}">
										<label class="form-label">Category</label>
										<select name="categories[]" class="multiple-select" data-placeholder="Choose anything"  multiple="multiple">
										@foreach($categories as $category)
											<option value="{{ $category->id }}">{{ $category->name }}</option>
											@endforeach
						
										</select>
									</div>
							
									<div class="form-check">
								
								<input class="form-check-input" type="checkbox" name="editor" value="0" id="flexCheckDefault">

								<label class="form-check-label" for="flexCheckDefault">Edited by Cheif-Editor</label>
							</div>
							<div class="form-check">

								<input class="form-check-input" name="publish" type="checkbox" value="0" id="flexCheckChecked" >

								<label class="form-check-label" for="flexCheckChecked">Publish</label>
							</div>
							  <div class="col-12">
								  <div class="d-grid">
									 
                                         <button type="submit" class="btn btn-primary">Save</button>
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