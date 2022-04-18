@extends('layouts.backend')

@section('title', 'Register Member')

@section('content')
<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Forms</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Input Group</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
						<div class="ms-auto"><a href="{{ route('users.index')}}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-arrow"></i>Go Back</a></div>
							
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Basic example</h6>
						<hr/>
						<div class="card">
                        <div class="card border-top border-0 border-4 border-danger">
							<div class="card-body p-5">
								<div class="card-title d-flex align-items-center">
									<div><i class="bx bxs-user me-1 font-22 text-danger"></i>
									</div>
									<h5 class="mb-0 text-danger">User Registration</h5>
								</div>
								<hr>
                                <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
					   @method('POST')
		@csrf
          
									<div class="col-md-12">
										<label for="inputLastName1" class="form-label">First Name</label>
										<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
											<input type="text" name="name" class="form-control border-start-0" id="inputLastName1" placeholder="First Name" required/>
										</div>
									</div>
								
									<div class="col-md-12">
										<label for="inputLastName2" class="form-label">Email Address</label>
										<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-message'></i></span>
											<input type="text" name="email" class="form-control border-start-0" id="inputLastName2" placeholder="Email" required/>
										</div>
									</div>
                                
                                   
								
									<div class="col-12">
										<label for="inputChoosePassword" class="form-label">Choose Password</label>
										<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-lock-open' ></i></span>
											<input type="password" name="password" class="form-control border-start-0" id="inputChoosePassword" placeholder="Choose Password" required/>
										</div>
									</div>
									<div class="col-12">
										<label for="inputConfirmPassword" class="form-label">Confirm Password</label>
										<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-lock' ></i></span>
											<input type="password" name="confirm-password" class="form-control border-start-0" id="inputConfirmPassword" placeholder="Confirm Password" required/>
										</div>
									</div>
									<div class="col-12">
									
								  <label for="inputLastName2" class="form-label">Role</label>
                                  {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
									
									</div>
								
                                   
									<div class="col-12">
										<button type="submit" class="btn btn-success px-5">Register</button>
									</div>
								</form>
							</div>
						</div>
					
					
					</div>
				</div>
				<!--end row-->
			</div>
		</div>


@endsection