@extends('layouts.backend')

@section('title', 'View Audio')

@section('content')

<div class="page-wrapper">
			<div class="page-content">

				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Media Audio</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Audio Details</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
                        <div class="ms-auto"><a href="{{route('audio.index')}}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-arrow"></i>Go Back</a></div>
						
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->

				 <div class="card">
					<div class="row g-0">
					  <div class="col-md-4 border-end">
                      <h5>Audio Thumbnail</h5>
						<img src="{{ URL::asset('storage/audio/image/'.$audio->image) }}" class="img-fluid" alt="...">
                        <h5>Play Audio</h5>
                        <audio src="{{ URL::asset('storage/audio/mp3/'.$audio->audio) }}" autoplay controls></audio>
						
					  </div>
					  <div class="col-md-8">
						<div class="card-body">
						  <h4 class="card-title">{{ $audio->title }}</h4>
						  
						  
						  <dl class="row">
							<dt class="col-sm-3">Audio Caption</dt>
							<dd class="col-sm-9">{{ $audio->caption }}</dd>
						  
							<dt class="col-sm-3">Duration</dt>
							<dd class="col-sm-9">{{ $audio->duration }}</dd>

                            <dt class="col-sm-3">Created_at</dt>
							<dd class="col-sm-9">{{ $audio->created_at->toFormattedDateString() }}</dd>
						  

                            <dt class="col-sm-3">Updated_at</dt>
							<dd class="col-sm-9">{{ $audio['updated_at']->diffForHumans() }}</dd>
						  </dl>
						  <hr>
						  <div class="row row-cols-auto row-cols-1 row-cols-md-3 align-items-center">
						
						</div>
						<div class="card-body">
						<ul class="nav nav-tabs nav-primary mb-0" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
									<div class="d-flex align-items-center">
										<div class="tab-icon"><i class='bx bx-comment-detail font-18 me-1'></i>
										</div>
										<div class="tab-title"> Product Description </div>
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
						
							<p>   {!! $audio->body !!}</p>
						
							</div>
							<div class="tab-pane fade" id="primaryprofile" role="tabpanel">
							@foreach($audio->tags as $tag)
							<span class="badge bg-light-success text-success w-100">{{ $tag->name }}</span>
							
								@endforeach
							</div>
							<div class="tab-pane fade" id="primarycontact" role="tabpanel">
							@foreach($audio->categories as $category)
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