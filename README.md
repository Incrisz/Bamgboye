Full media dashboard with 
1.home-slider
2.Audio
3.Video
4.Blog
5.Tags
6.Category

delete buttons not working update with
   <form id="delete-form-{{ $member->id }}" action="{{ route('love.destroy',$member->id) }}" method="POST"  >
												@csrf
												@method('DELETE')
										<a href="javascript:;" onclick="deleteMember({{ $member->id }})" class="text-danger bg-light-danger border-0">
									
									<button type="submit" class='bx bxs-trash'></button></a>
									
											</form>


Run migration then register# Bamgboye
