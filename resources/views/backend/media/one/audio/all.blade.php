@extends('layouts.backend')

@section('title', 'Audio')

@section('content')
<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Audio</div>
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
						<div class="ms-auto"><a href="{{route('audio.create')}}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New Audio</a></div>
		
								</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
			
				<h6 class="mb-0 text-uppercase">Media Audio</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
									<th>Id</th>
                                    <th>Thumbnail</th>
										<th>Title</th>
										<!-- <th>Audio</th> -->
										<th>Audio Caption</th>
										<th>Duration</th>
										<th>Created_at</th>
										<th>Updated_at</th>
										
										<th>Editor</th>
										<th>Chief-Editor</th>
										<th>Publisher</th>
										
                                        <th>Action</th>
									</tr>
								</thead>
								<tbody>
								@foreach($audios as $key=>$audio)
									<tr>
									<td>{{ $key + 1 }}</td>
										<td>
                                        <div class="recent-product-img">
													 <img src="{{ URL::asset('storage/audio/image/'.$audio->image) }}" alt="">
												 </div>
                                        </td>
                                        <td>{{ $audio->title }} </td>
                                        <!-- <td>
										<div class="recent-product-img">
													 <img src="{{ URL::asset('assets/images/products/08.png') }}" alt="">
												 </div></td> -->
									
										<td>{{ $audio->caption }}</td>
										<td>{{ $audio->duration }}</td>
										<td>{{ $audio->created_at->toFormattedDateString() }}</td>
										<td>{{ $audio['updated_at']->diffForHumans() }}</td>
									
										<td class=""><span class="badge bg-light-success text-success w-100">Edited</span></td>
										@if($audio->editor == true)
										<td class=""><span class="badge bg-light-success text-success w-100">Approved</span></td>
										@else
										<td class=""><span class="badge bg-light-danger text-danger w-100">Not-Approved</span></td>
										@endif

										@if($audio->publish == true)
										<td class=""><span class="badge bg-light-success text-success w-100">Published</span></td>
										@else
										<td class=""><span class="badge bg-light-danger text-danger w-100">Not-Published</span></td>
										@endif
								
                                        <th>
                                        <div class="d-flex order-actions">	

                                        <a href="{{ route('audio.show',$audio->id) }}" class="text-warning bg-light-warning border-0"><i class='bx bxs-show'></i></a>
										<a href="{{ route('audio.edit',$audio->id) }}" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>

										<a href="javascript:;" onclick="deleteAudio({{ $audio->id }})" class="text-danger bg-light-danger border-0">
									
									<i class='bx bxs-trash'></i></a>
									<form id="delete-form-{{ $audio->id }}" action="{{ route('audio.destroy',$audio->id) }}" method="POST" style="display: none;">
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
									<th>Thumbnail</th>
										<th>Title</th>
										<!-- <th>Audio</th> -->
										<th>Audio Caption</th>
										<th>Duration</th>
										<th>Created_at</th>
										<th>Updated_at</th>
										
										<th>Editor</th>
										<th>Chief-Editor</th>
										<th>Publisher</th>
										
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
        function deleteAudio(id) {
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