@extends('layouts.backend')

@section('title', 'Add Role')

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
									<h5 class="mb-0 text-danger">Add-Role</h5>
								</div>
								<hr>
							
                                <form class="row g-3" action="{{ route('roles.store') }}" method="POST" enctype="multipart/form-data">
				@method('POST')
				@csrf
									<div class="col-md-12">
									<label for="inputLastName2" class="form-label">Role</label>
										<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
                                       
								<input type="text" class="form-control" id="inputProductTitle" name="name" placeholder="Enter Role_Name">
										</div>
                                        
									</div>


                                    <label for="inputLastName2" class="form-label"><h5>Permissions</h5></label>
                                    @foreach($permission as $value)

                                    <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}

{{ $value->name }}</label>

<br/>
@endforeach
                               


                                    <!-- <div class="col-6">
										<button type="submit" class="btn btn-danger px-5">Cancel</button>
									</div> -->
									<div class="col-12">
										<button type="submit" class="btn btn-success px-5">Update</button>
									</div>
								</form>
                                {!! Form::close() !!}
							</div>
						</div>
					
					
					</div>
				</div>
				<!--end row-->
			</div>
		</div>


@endsection