<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{ URL::asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Synadmin</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
			<li>
					<a href="{{ route('home') }}" class="">
						<div class="parent-icon"><i class='bx bx-home'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
			
				<!-- <li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-spa' ></i>
						</div>
						<div class="menu-title">Attendance</div>
					</a>
					<ul>
						<li> <a href="app-emailbox.html"><i class="bx bx-edit-alt"></i>Mark Attendance</a>
						</li>
						<li> <a href="app-chat-box.html"><i class="bx bx-show"></i>View Attendance</a>
						</li>
						<li> <a href="app-file-manager.html"><i class="bx bx-bar-chart"></i>Analysis</a>
						</li>
					</ul>
				</li> -->

				<li class="menu-label">Home Section</li>
				
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-message-detail' ></i>
						</div>
						<div class="menu-title">Home-Slider</div>
					</a>
					<ul>
						<li> <a href="{{ route('slider.index') }}"><i class="bx bx-envelope-open"></i>Home </a>
						</li>
						<!-- <li> <a href="t.html"><i class="bx bx-message-rounded-check"></i>Home 2</a>
						</li>
						<li> <a href="g.html"><i class="bx bx-message-rounded-check"></i>Home 3</a>
						</li> -->
						
						
					</ul>
				</li>
				<li class="menu-label">Media Section 1</li>
				
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-message-detail' ></i>
						</div>
						<div class="menu-title">Blog</div>
					</a>
					<ul>
						<li> <a href="{{ route('blog.index') }}"><i class="bx bx-envelope-open"></i>View Blog</a>
						</li>
						<li> <a href="{{ route('blog.create') }}"><i class="bx bx-message-rounded-check"></i>Upload Blog</a>
						</li>
						
						
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-music'></i>
						</div>
						<div class="menu-title">Audio</div>
					</a>
					<ul>
						<li> <a href="{{ route('audio.index') }}"><i class="bx bx-grid"></i>View Audio</a>
						</li>
						<li> <a href="{{ route('audio.create') }}"><i class="bx bx-edit-alt"></i>Upload Audio</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-play' ></i>
						</div>
						<div class="menu-title">Video</div>
					</a>
					<ul>
						<li> <a href="{{ route('video.index') }}"><i class="bx bx-notepad"></i>View Video</a>
						</li>
					
						<li> <a href="{{ route('video.create') }}"><i class="bx bx-play"></i>Upload Video</a>
						</li>
						
					</ul>
				</li>
		
<!-- 
				<li class="menu-label">Media Section 2</li>
				
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-message-detail' ></i>
						</div>
						<div class="menu-title">Blog</div>
					</a>
					<ul>
						<li> <a href="aaa.html"><i class="bx bx-envelope-open"></i>View Blog</a>
						</li>
						<li> <a href="b.html"><i class="bx bx-message-rounded-check"></i>Upload Blog</a>
						</li>
						
						
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-music'></i>
						</div>
						<div class="menu-title">Audio</div>
					</a>
					<ul>
						<li> <a href="c.html"><i class="bx bx-grid"></i>View Audio</a>
						</li>
						<li> <a href="d.html"><i class="bx bx-edit-alt"></i>Upload Audio</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-play' ></i>
						</div>
						<div class="menu-title">Video</div>
					</a>
					<ul>
						<li> <a href="e.html"><i class="bx bx-notepad"></i>View Video</a>
						</li>
					
						<li> <a href="f.html"><i class="bx bx-play"></i>Upload Video</a>
						</li>
						
					</ul>
				</li>

				<li class="menu-label">Media Section 3</li>
				
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-message-detail' ></i>
						</div>
						<div class="menu-title">Blog</div>
					</a>
					<ul>
						<li> <a href="g.html"><i class="bx bx-envelope-open"></i>View Blog</a>
						</li>
						<li> <a href="h.html"><i class="bx bx-message-rounded-check"></i>Upload Blog</a>
						</li>
						
						
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-music'></i>
						</div>
						<div class="menu-title">Audio</div>
					</a>
					<ul>
						<li> <a href="i.html"><i class="bx bx-grid"></i>View Audio</a>
						</li>
						<li> <a href="j.html"><i class="bx bx-edit-alt"></i>Upload Audio</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-play' ></i>
						</div>
						<div class="menu-title">Video</div>
					</a>
					<ul>
						<li> <a href="k.html"><i class="bx bx-notepad"></i>View Video</a>
						</li>
					
						<li> <a href="l.html"><i class="bx bx-play"></i>Upload Video</a>
						</li>
						
					</ul>
				</li> -->
			
				<li class="menu-label">Security Section</li>


				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-user'></i>
						</div>
						<div class="menu-title">Authorizaton</div>
					</a>
					<ul>
						<li> <a href="{{ route('roles.index') }}"><i class="bx bx-grid"></i>Roles</a>
						</li>
						<!-- <li> <a href=""><i class="bx bx-edit-alt"></i>Permission</a>
						</li> -->
						
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-group'></i>
						</div>
						<div class="menu-title">Users</div>
					</a>
					<ul>
						<li> <a href="{{ route('users.index') }}"><i class="bx bx-right-arrow-alt"></i>All Users</a>
						</li>
						<li> <a href="{{ route('users.create') }}"><i class="bx bx-right-arrow-alt"></i>Register</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-search'></i>
						</div>
						<div class="menu-title">Search Option</div>
					</a>
					<ul>
						<li> <a href="{{ route('tag.index') }}"><i class="bx bx-right-arrow-alt"></i>Tags</a>
						</li>
						<li> <a href="{{ route('category.index') }}"><i class="bx bx-right-arrow-alt"></i>Category</a>
						</li>
						
					</ul>
				</li>
				<!-- <li>
					<a href="timeline.html">
						<div class="parent-icon"> <i class="bx bx-video-recording"></i>
						</div>
						<div class="menu-title">Timeline</div>
					</a>
				</li> -->
				<li>
					<a href="">
						<div class="parent-icon"><i class='bx bx-user-pin' ></i>
						</div>
						<div class="menu-title">User Profile</div>
					</a>
				</li>
				
			
			
			
				<li class="menu-label">Others</li>
				
				<li>
					<a href="rrr.html" target="_blank">
						<div class="parent-icon"><i class='bx bx-file' ></i>
						</div>
						<div class="menu-title">Documentation</div>
					</a>
				</li>
				<li>
					<a href="" target="_blank">
						<div class="parent-icon"><i class='bx bx-headphone' ></i>
						</div>
						<div class="menu-title">Support</div>
					</a>
				</li>
			</ul>
			<!--end navigation-->
		</div>