@extends('layouts.backend')

@section('title', 'Show Role')

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
						<div class="ms-auto"><a href="{{route('roles.index')}}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-arrow"></i>Go Back</a></div>
							
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Basic </h6>
						<hr/>
						<div class="card">
                        <div class="card border-top border-0 border-4 border-danger">
							<div class="card-body p-5">
								<div class="card-title d-flex align-items-center">
									<div><i class="bx bxs-user me-1 font-22 text-danger"></i>
									</div>
									<h5 class="mb-0 text-danger">Role</h5>
								</div>
								<hr>
							
                                <form class="row g-3" >
			
									<div class="col-md-12">
									<label for="inputLastName2" class="form-label">Role</label>
										<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
                                       
                                        <input type="text" class="form-control" value="  {{ $role->name }}" id="inputProductTitle" placeholder="Enter Role_Name" disabled>

                              
										</div>
                                        
									</div>


                                    <label for="inputLastName2" class="form-label"><h5>Permissions Attached</h5></label>
                                    @if(!empty($rolePermissions))

@foreach($rolePermissions as $v)

<label class="label label-success">{{ $v->name }},</label>

@endforeach
@endif

                               


                                    <!-- <div class="col-6">
										<button type="submit" class="btn btn-danger px-5">Cancel</button>
									</div> -->
									<!-- <div class="col-12">
										<button type="submit" class="btn btn-success px-5">Update</button>
									</div> -->
								</form>
                              
							</div>
						</div>
					
					
					</div>
				</div>
				<!--end row-->
			</div>
		</div>


@endsection