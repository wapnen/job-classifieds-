<!DOCTYPE html>
<html lang="en">
<head>

  @include('layouts.head', ['title' => 'Register'])

</head>

<body class="body-wrapper">

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg  navigation">
                    @include('layouts.nav', ['selected' => 'auth'])
                </nav>
            </div>
        </div>
    </div>
</section>
<section >
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="background-color: black; padding: 2%;">
                <!-- Advance Search -->
               <h1 class="text-center" style="color: white; text-transform: uppercase;">Join Us</h1>
            </div>
        </div>
    </div>
</section>
<section class=" section">
    <!-- Container Start -->

    <div class="container">
        <!-- Row Start -->
        <div class="row">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <!-- Edit Personal Info -->
                <div class="widget personal-info">
                    <h3 class="widget-header ">Sign up | Personal information</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">


                            <div class="col-md-12">
                                 <label for="name" >Name</label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

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
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                                <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-md-12">
                                <label for="password" >Password</label>

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
                        <div class="form-group row">


                                <div class="radio col-md-6 text-center">
                                  <label><input type="radio" name="role" value="Customer" class="form-control" checked="true">I want to hire</label>
                                </div>
                                <div class="radio col-md-6 text-center">
                                  <label><input type="radio" name="role" value="Artisan" class="form-control" >I want to work</label>
                                </div>
                        </div>
                        <div class="form-group row specialty" style="display:none;">

                                <div class="radio col-md-12 ">
                                  <label>Select Specialty </label>
                                  <select name="specialty" class="form-control">
                                    <option value="Automotive maintenance and repair">Automotive maintenance and repair</option>
                                    <option value="Beauty and cosmetics">Beauty and cosmetics</option>
                                    <option value="Mobile and cell">Mobile and cell</option>
                                    <option value="Computer and software">Computer and software</option>
                                    <option value="Creative">Creative</option>
                                    <option value="Event management">Event management</option>
                                    <option value="Farm/Garden">Farm/Garden</option>
                                    <option value="Lessons">Lessons</option>
                                    <option value="Therapeutic">Therapeutic</option>
                                    <option value="Plumbing">Plumbing</option>
                                    <option value="Electrical and lightning">Electrical and lightning</option>
                                    <option value="Carpentry and furniture">Carpentry and furniture</option>
                                    <option value="Labor and movement">Labor and movement</option>
                                  </select>
                                </div>
                        </div>
                        <hr>
                        <div class="form-group row mb-0">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-transparent">

                                    Sign up
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

<script type="text/javascript">
  $(document).ready(function(){
      $('input[type=radio][name=role]').change(function(){
          if(this.value == 'Artisan'){
            $('.specialty').show();
          }
          else{
            $('.specialty').hide();
          }
      });
  });
</script>
</body>

</html>
