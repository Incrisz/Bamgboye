@extends('layouts.backend')

@section('title', 'Home-Slider')

@section('content')

<div class="page-wrapper">
			<div class="page-content">

				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Edit Home-slider</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">EDit Home-slider</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
						<div class="ms-auto"><a href="{{route('slider.index')}}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-arrow"></i>Go Back</a></div>
							
						</div>
					</div>
				</div>
				<!--end breadcrumb-->

             
				<div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">Edit Home-Slider</h5>
					  <hr/>
                       <div class="form-body mt-4">
					    <div class="row">
						   <div class="col-lg-8">
                           <div class="border border-3 p-4 rounded">

						   <form action="{{ route('slider.update',$slider->id) }}" method="POST" enctype="multipart/form-data">
		@csrf
            @method('PUT')
							<div class="mb-3">
								<label for="inputProductTitle" class="form-label">Home Title</label>
								<input type="text" name="title" value="{{ $slider->title }}"  class="form-control" id="inputProductTitle" placeholder="Enter product title">
							  </div>
							  <div class="mb-3">
								<label for="inputProductDescription" class="form-label">Description</label>
								<textarea class="form-control" name="body" value="{{ $slider->body }}" id="inputProductDescription" rows="3">{{ $slider->body }}</textarea>
							  </div>
							  <div class="mb-3">
								<label for="inputProductDescription" class="form-label">Thumbnail</label>
								<input id="image-uploadify" type="file" name='image' accept="" multiple>
							  </div>
                            </div>
						   </div>
						   <div class="col-lg-4">
							<div class="border border-3 p-4 rounded">
                              <div class="row g-3">
								
								  <div class="col-md-12">
									<label for="inputCompareatprice" class="form-label">Button Caption</label>
									<input type="text" name="caption" value="{{$slider->caption}}" class="form-control" id="inputCompareatprice" placeholder="">
								  </div>
								  <!-- <div class="col-md-12">
								  <label class="form-label">Thumbnail</label>
										<input type="file" class="form-control">
								  </div> -->
								
								  <!-- <form>
									<div class="mb-3">
										<label class="form-label">Tags</label>
										<select class="multiple-select" data-placeholder="Choose anything"  multiple="multiple">
											<option value="Togo">Togo</option>
											<option value="Tokelau">Tokelau</option>
						
										</select>
									</div>
									<div class="mb-3">
										<label class="form-label">Category</label>
										<select class="multiple-select" data-placeholder="Choose anything"  multiple="multiple">
											<option value="Togo">Togo</option>
											<option value="Tokelau">Tokelau</option>
						
										</select>
									</div>
								</form> -->

								<div class="form-check">
									<input class="form-check-input" type="checkbox"  id="flexCheckChecked" name="editor" value="{{ $slider->editor}}" {{ $slider->editor == true ? 'checked' : '' }} >
									<label class="form-check-label" for="flexCheckChecked">Edited by Cheif-Editor</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="flexCheckDefault" name="publish" value="{{ $slider->publish }}" {{ $slider->publish == true ? 'checked' : '' }}>
									<label class="form-check-label" for="flexCheckDefault">Publish</label>
								</div>
								  <div class="col-12">
									  <div class="d-grid">
                                         <button type="submit" class="btn btn-primary">Update</button>
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