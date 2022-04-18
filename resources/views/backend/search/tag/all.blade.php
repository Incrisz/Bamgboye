@extends('layouts.backend')

@section('title', 'Tags')

@section('content')

<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Tags</div>
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
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New Tag</button>
										<!-- Modal -->
										<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Add New Tag</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<form class="row g-3" action="{{ route('tag.store') }}" method="POST">
												@csrf
									<div class="col-md-8">
										<!-- <label for="inputFirstName" class="form-label">First Name</label> -->
										<input type="text" class="form-control" name="name" id="inputFirstName">
									</div>
									
													<div class="modal-footer">
														<!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
														<button type="submit" class="btn btn-primary">Save</button>
													</div>
													</form>
												</div>
											</div>
										</div>
		
								</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
			
				<h6 class="mb-0 text-uppercase">  _Tag</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered">
								<thead>
									<tr>
                                    <th>Id</th>
										<th>Tag_Name</th>
										
										<th>Created_at</th>
										<th>Updated_at</th>
										
										
										
                                        <th>Action</th>
									</tr>
								</thead>
								<tbody>
								@foreach($tags as $key=>$tag)
									<tr>
										<td>{{ $key + 1 }}</td>
                                        <td>{{ $tag->name }}</td>
										
										<td>{{ $tag->created_at->toFormattedDateString() }}</td>
										<td>{{ $tag['updated_at']->diffForHumans() }}</td>
                                        
                                        <th>
                                        <div class="d-flex order-actions">	

                                        <!-- <a href="" class="text-warning bg-light-warning border-0"><i class='bx bxs-show'></i></a> -->
										<a href="{{ route('tag.edit',$tag->id) }}" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>

                                        <a href="javascript:;" onclick="deleteTag({{ $tag->id }})" class="text-danger bg-light-danger border-0">
									
										<i class='bx bxs-trash'></i></a>
										<form id="delete-form-{{ $tag->id }}" action="{{ route('tag.destroy',$tag->id) }}" method="POST" style="display: none;">
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
									<th>Id</th>
										<th>Tag_Name</th>
										
										
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
@push('css')
<script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
    <script type="text/javascript">
        function deleteTag(id) {
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