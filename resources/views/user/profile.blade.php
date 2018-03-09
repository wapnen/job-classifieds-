<!DOCTYPE html>
<html lang="en">
<head>

  @include('layouts.head', ['title' => 'Profile'])

</head>

<body class="body-wrapper">

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg  navigation">
                    @include('layouts.nav')
                </nav>
            </div>
        </div>
    </div>
</section>
<!--==================================
=            User Profile            =
===================================-->
<section class="dashboard section">
    <!-- Container Start -->
    <div class="container">
        <!-- Row Start -->
        <div class="row">
            <div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
               @include('layouts.sidebar', ['user' => Auth::user(), 'selected' => 'profile'])
                
            </div>
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
                <!-- Edit Personal Info -->
                <div class="widget personal-info">
                    <h3 class="widget-header user">Edit Personal Information</h3>
                    <form method="POST" action="{{ url('/profile') }}">
                        @csrf

                        <div class="form-group row">
                           

                            <div class="col-md-12">
                                 <label for="name" >Name</label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ Auth::user()->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            

                            <div class="col-md-12">
                                <label for="email" >E-Mail Address</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ Auth::user()->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                           

                            <div class="col-md-12">
                                 <label for="phone" >Phone</label>
                                <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ Auth::user()->phone }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            
                                <div class="radio col-md-6 text-center">
                                  <label><input type="radio" name="role" value="Artisan" class="form-control" @if(Auth::user()->role == 
                                "Artisan") checked="true" @endif>I want to work</label>
                                </div>
                                <div class="radio col-md-6 text-center">
                                  <label><input type="radio" name="role"  @if(Auth::user()->role == 
                                "Customer") checked="true" @endif value="Customer" class="form-control">I want to hire</label>
                                </div>
                            
                        </div>
                        <hr>
                        <div class="form-group row mb-0">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-transparent">
                                    
                                    Save changes
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Change Password -->
                <div class="widget change-password">
                    <h3 class="widget-header user">Edit Password</h3>
                    <form action="/password/update" method="post">
                        @csrf
                        <!-- Current Password -->
                        <div class="form-group @if (session('password')) is-invalid @endif">
                            <label for="current-password">Current Password</label>
                            <input type="password" class="form-control" name="current-password" id="current-password">
                            @if (session('password'))
                                    <span class="invalid-feedback">
                                        <strong>Wrong password</strong>
                                    </span>
                            @endif
                        </div>
                         <div class="form-group row">
                            
                            <div class="col-md-12">
                                <label for="password" >New password</label>

                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                           
                            <div class="col-md-12">
                                 <label for="password-confirm" >Confirm Password</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <div class="form-group row mb-0">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-transparent">
                                    
                                    Change password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</section>
<!--============================
=            Footer            =
=============================-->
@include('layouts.footer')


</body>

</html>