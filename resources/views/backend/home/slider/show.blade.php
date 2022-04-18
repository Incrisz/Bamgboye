@extends('layouts.backend')

@section('title', 'Home-slider')

@section('content')

<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Components</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Carousels</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
						<div class="ms-auto"><a href="{{ route('slider.index')}}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Go Back</a></div>
		
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row row-cols-1">
				
					<div class="col">
						
						<div class="card">
							<div class="card-body">
								<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
									<ol class="carousel-indicators">
										<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
										<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
										<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
									</ol>
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img src="{{ URL::asset('storage/slider/'.$slider->image) }}" class="d-block w-100" alt="...">
											<div class="carousel-caption d-none d-md-block">
												<h5>{{ $slider->title }}</h5>
												<p>{{ $slider->body }}</p>
												
											</div>
										</div>
										<!-- <div class="carousel-item">
											<img src="{{ URL::asset('assets/images/gallery/27.png') }}" class="d-block w-100" alt="...">
											<div class="carousel-caption d-none d-md-block">
												<h5>Second slide label</h5>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											</div>
										</div>
										<div class="carousel-item">
											<img src="{{ URL::asset('assets/images/gallery/28.png') }}" class="d-block w-100" alt="...">
											<div class="carousel-caption d-none d-md-block">
												<h5>Third slide label</h5>
												<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
											</div>
										</div> -->
									</div>
									<!-- <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">	<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Next</span>
									</a> -->
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<!--end row-->
				
			</div>
		</div>
        @endsection