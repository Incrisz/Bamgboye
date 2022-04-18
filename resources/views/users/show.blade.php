@extends('layouts.backend')

@section('title', 'Members Profile')

@section('content')

<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">User Profile</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">User Profile</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
                    <div class="btn-group">
                        <div class="ms-auto"><a href="{{route('users.index')}}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-arrow"></i>Go Back</a></div>
						
							</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<div class="d-flex flex-column align-items-center text-center">
											<img src="{{ URL::asset('assets/images/avatars/avatar-2.png') }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
											<div class="mt-3">
												<h4>{{ $user->name }}</h4>
												<p class="text-secondary mb-1">Media Staff</p>
												<p class="text-muted font-size-sm">Bay Area, Nigeria</p>
												<!-- <button class="btn btn-primary">{{ $user->email }}</button> -->
												<button class="btn btn-outline-primary">Message</button>
											</div>
										</div>
										<hr class="my-4" />
										<ul class="list-group list-group-flush">
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Role</h6>
                                                @if(!empty($user->getRoleNames()))
                                                @foreach($user->getRoleNames() as $v)
												<span class="text-secondary">{{ $v }}</span>
                                                @endforeach
                                                @endif
											</li>
											
											
											
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="card">
									<div class="card-body">
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Full Name</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" class="form-control" value="{{ $user->name }}" disabled/>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Email</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" class="form-control" value="{{ $user->email }}" disabled/>
											</div>
										</div>
									
										<!-- <div class="row">
											<div class="col-sm-3"></div>
											<div class="col-sm-9 text-secondary">
												<input type="button" class="btn btn-primary px-4" value="Save Changes" />
											</div>
										</div> -->
									</div>
								</div>
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
      
@endsection