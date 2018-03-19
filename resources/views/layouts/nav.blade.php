<a class="navbar-brand" href="{{url('/')}}">
						Classifieds
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item active">
								<a class="nav-link" href="{{url('/')}}">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Dashboard</a>
							</li>
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Pages <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Category</a>
									<a class="dropdown-item" href="#">Single Page</a>
									<a class="dropdown-item" href="#">Store Single</a>
									<a class="dropdown-item" href="#">Dashboard</a>
									<a class="dropdown-item" href="#">User Profile</a>
									<a class="dropdown-item" href="#">Submit Coupon</a>
									<a class="dropdown-item" href="#">Blog</a>
									<a class="dropdown-item" href="#">Single Post</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Listing <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
								</div>
							</li>
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
							@guest
							<li class="nav-item">
								<a class="nav-link login-button" href="{{route('login')}}">Login</a>
							</li>
							@else
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span><i class="fa fa-user"></i> </span> {{Auth::user()->name}} 
								</a>
								<!-- Dropdown list -->
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Edit profile</a>
									<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
								</div>
							</li>
							@endif
							<li class="nav-item">
								<a class="nav-link add-button" href="{{route('classified.create')}}"><i class="fa fa-plus-circle"></i> Post a Job</a>
							</li>
						</ul>
					</div>