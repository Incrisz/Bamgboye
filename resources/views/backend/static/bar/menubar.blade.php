<header>
			<div class="topbar d-flex align-items-center bg-dark shadow-none border-light-2 border-bottom">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu text-white me-3"><i class='bx bx-menu'></i>
					</div>
					<div class="top-menu-left d-none d-lg-block">
				 	 <ul class="nav">
						<li class="nav-item">
						  <a class="nav-link text-white" href="#"><i class='bx bx-envelope'></i></a>
						</li>
						<li class="nav-item">
						  <a class="nav-link text-white" href="#"><i class='bx bx-message'></i></a>
						</li>
						<li class="nav-item">
						  <a class="nav-link text-white" href=""><i class='bx bx-calendar'></i></a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link text-white" href="#"><i class='bx bx-check-square'></i></a>
						</li> -->
					</ul>
				   </div>
					<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
							<form>
							  <input type="text" class="form-control search-control" autofocus placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
							   <span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
						    </form>
						</div>
					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center">
							<li class="nav-item mobile-search-icon">
								<a class="nav-link text-white" href="javascript:;">	<i class='bx bx-search'></i>
								</a>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">	<i class='bx bx-category'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<div class="row row-cols-3 g-3 p-3">
									<a class="" href="{{ route('home') }}">
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-burning text-white"><i class='bx bx-atom'></i>
											</div>
											<div class="app-title">Dashboard</div>
										</div>
										</a>
									<a class="" href="{{ route('users.index') }}">
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-cosmic text-white"><i class='bx bx-group'></i>
											</div>

											<div class="app-title">Teams</div>
										</div>
										</a>
										<a class="" href="{{ route('slider.index') }}">
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-moonlit text-white"><i class='bx bx-filter-alt'></i>
											</div>
											<div class="app-title">Home-Slider</div>
										</div>
										</a>
										
										<a class="" href="{{ route('video.index') }}">
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-lush text-white"><i class='bx bx-play'></i>
											</div>
											<div class="app-title">Video</div>
										</div>
										</a>
										<a class="" href="{{ route('audio.index') }}">
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-kyoto text-dark"><i class='bx bx-music'></i>
											</div>
											<div class="app-title">Audio</div>
										</div>
										</a>
										<a class="" href="{{ route('blog.index') }}">
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-blues text-dark"><i class='bx bx-file'></i>
											</div>
											<div class="app-title">Blog</div>
										</div>
										</a>
									
								
									</div>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
							
								<div class="dropdown-menu dropdown-menu-end">
									
									<div class="header-notifications-list">
								
									</div>
									
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
							
								<div class="dropdown-menu dropdown-menu-end">
									
									<div class="header-message-list">
										
									</div>
									
								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown border-light-2">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="{{ URL::asset('assets/images/avatars/avatar-2.png') }}" class="user-img" alt="user avatar">
							<div class="user-info ps-3">
								<p class="user-name mb-0 text-white">Incrisz Skylar</p>
								<p class="designattion mb-0">Cheif-Editor</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Settings</span></a>
							</li>

							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li>
							<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class='bx bx-log-out-circle'></i><span>  {{ __('Logout') }}</span></a>
													 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>