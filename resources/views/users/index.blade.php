@extends('layouts.backend')

@section('title', 'Members')

@section('content')
<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Members</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"> Table</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
						<div class="ms-auto"><a href="{{ route('users.create') }}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New Member</a></div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
			
				<h6 class="mb-0 text-uppercase">List of Members In Church</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
                  <td>Id</td>
										<th>Full_Name</th>
										<th>Email</th>
		                 <th>Role</th>
										<th>Created_at</th>
										<th>Updated_at</th>
                         <th>Action</th>
									</tr>
								</thead>
								<tbody>
                @foreach ($data as $key => $user)
									<tr>
                  <td>{{ ++$i }}</td>
                                        <td>{{ $user->name }}</td>
                                       
										<td>{{ $user->email }}</td>
                    @if(!empty($user->getRoleNames()))

@foreach($user->getRoleNames() as $v)
										<td><span class="badge bg-light-success text-warning w-100">{{ $v }}</span></td>

                    @endforeach

@endif
										<td>{{ $user->created_at->toFormattedDateString() }}</td>
										<td>{{ $user['updated_at']->diffForHumans() }}</td>
                                        <th>
                                        <div class="d-flex order-actions">	

                                        <a href="{{ route('users.show',$user->id) }}" class="text-success bg-light-success border-0"><i class='bx bxs-show'></i></a>
										<a href="{{ route('users.edit',$user->id) }}" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>

                    <a href="javascript:;" onclick="deleteUser({{ $user->id }})" class="text-danger bg-light-danger border-0">
									
									<i class='bx bxs-trash'></i></a>
									<form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy',$user->id) }}" method="POST" style="display: none;">
												@csrf
												@method('DELETE')
											</form>
												</div>
                                        </th>
									</tr>
                  @endforeach
								</tbody>
								<tfoot>
									<tr>
                  <td>Id</td>
										<th>Full_Name</th>
										<th>Email</th>
									 <th>Role</th>
										<th>Created_at</th>
										<th>Updated_at</th>
                                        <th>Action</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
      
@endsection
@push('js')
<script src="{{ URL::asset('assets/js/sweet.js') }}"></script>
    <script type="text/javascript">
        function deleteUser(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>
@endpush