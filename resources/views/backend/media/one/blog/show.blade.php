@extends('layouts.backend')

@section('title', 'Blog-Show')

@section('content')

<div class="page-wrapper">
			<div class="page-content">

				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Media Blog</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Blogs Details</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
                        <div class="ms-auto"><a href="{{route('blog.index')}}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Go Back</a></div>
								
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->

				 <div class="card">
					<div class="row g-0">
					  <div class="col-md-4 border-end">
						<img src="{{ URL::asset('storage/blog/'.$blog->image) }}" class="img-fluid" alt="...">
						
					  </div>
					  <div class="col-md-8">
						<div class="card-body">
						  <h4 class="card-title"> {{ $blog->title }} </h4>
					
						  <hr>
                          <div class="card-body">
						<ul class="nav nav-tabs nav-primary mb-0" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
									<div class="d-flex align-items-center">
										<div class="tab-icon"><i class='bx bx-comment-detail font-18 me-1'></i>
										</div>
										<div class="tab-title"> Blog Description </div>
									</div>
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" data-bs-toggle="tab" href="#primaryprofile" role="tab" aria-selected="false">
									<div class="d-flex align-items-center">
										<div class="tab-icon"><i class='bx bx-bookmark-alt font-18 me-1'></i>
										</div>
										<div class="tab-title">Tags</div>
									</div>
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" data-bs-toggle="tab" href="#primarycontact" role="tab" aria-selected="false">
									<div class="d-flex align-items-center">
										<div class="tab-icon"><i class='bx bx-star font-18 me-1'></i>
										</div>
										<div class="tab-title">Category</div>
									</div>
								</a>
							</li>
						</ul>
						<div class="tab-content pt-3">
							<div class="tab-pane fade show active" id="primaryhome" role="tabpanel">

								<p>   {!! $blog->body !!}</p>
								
							</div>
							<div class="tab-pane fade" id="primaryprofile" role="tabpanel">
							@foreach($blog->tags as $tag)
							<span class="badge bg-light-success text-success w-100">{{ $tag->name }}</span>
							
								@endforeach
							</div>
							<div class="tab-pane fade" id="primarycontact" role="tabpanel">
							@foreach($blog->categories as $category)
							<span class="badge bg-light-success text-success w-100">{{ $category->name }}</span>
								
								@endforeach
							</div>
						</div>
					</div>
					
						</div>
					  </div>
					</div>
                    <hr/>
				

				  </div>


				
				  
			</div>
		</div>
        @endsection