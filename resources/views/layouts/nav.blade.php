<a class="navbar-brand" href="{{url('/')}}">
						Classifieds
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item @if($selected == 'welcome') active @endif">
								<a class="nav-link" href="{{url('/')}}">Home</a>
							</li>

							@if(Auth::user())
							<li class="nav-item @if($selected == 'home') active @endif">
								<a class="nav-link" href="{{url('/home')}}">Dashboard</a>
							</li>
							<li class="nav-item dropdown dropdown-slide @if($selected == 'ads') active @endif">
								<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Ads<span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">My ads</a>
									<a class="dropdown-item" href="#">My bids</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-slide @if($selected == 'message') active @endif">
								<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Messages <span class="badge badge-info text-right">{{count(App\Message::where('recipient_id', Auth::user()->id )->get())}}</span>	<span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<?php
										$recipients = App\Message::where('sender_id', Auth::user()->id)->orWhere('recipient_id', Auth::user()->id)->get();
										$recipient_arr = [];
										foreach ($recipients as $value) {
											if (!in_array($value->recipient_id, $recipient_arr) ) {
												$recipient_arr[] = $value->recipient_id;
											}
										}

										$recipients = App\User::find($recipient_arr);
								?>
								<div class="dropdown-menu dropdown-menu-right">
									@foreach($recipients as $recipient)
									 @if($recipient->id != Auth::user()->id)
									<a class="dropdown-item" href="message/{{ $recipient->id}}"><span class="product-thumb"><img width="40px" height="auto" src="/images/user/user.png" alt="image description"></span> {{$recipient->name}} <span class="badge badge-info text-right">Unread {{count(App\Message::where(['recipient_id' => Auth::user()->id , 'sender_id' => $recipient->id])->get())}}</span>	</a>
									 @endif
									@endforeach


								</div>
							</li>
							@endif
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
							@guest
							<li class="nav-item">
								<a class="nav-link login-button @if($selected == 'auth') active @endif" href="{{route('login')}}">Login</a>
							</li>
							<li class="nav-item">
								<a class="nav-link login-button @if($selected == 'auth') active @endif" href="{{route('register')}}">Register</a>
							</li>
							@else
							<li class="nav-item dropdown dropdown-slide @if($selected == 'profile') active @endif">
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
