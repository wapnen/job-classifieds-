<!DOCTYPE html>
<html lang="en">
<head>

  @include('layouts.head', ['title' => 'Create ad'])

</head>

<body class="body-wrapper">

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg  navigation">
                    @include('layouts.nav', ['selected' => 'ads'])
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
               @include('layouts.sidebar', ['user' => Auth::user(), 'selected' => 'ads'])
                
            </div>
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
                <!-- Edit Personal Info -->
                <div class="widget personal-info">
                    <h3 class="widget-header user">Post new ad</h3>
                    <form method="POST" action="{{ route('classified.store') }}">
                        @csrf

                        <div class="form-group row">
                          
                            <div class="col-md-12">
                                 <label for="title" >Job title</label>
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            

                            <div class="col-md-12">
                                 <label for="category" >Select job category</label>
                                <select class="form-control" name="category" required id="category" >
                                  
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
                                @if ($errors->has('category'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            

                            <div class="col-md-12">
                                <label for="description" >Description</label>
                                <textarea class="form-control {{$errors->has('description' ? 'is-invalid' : '')}}" name="description" id="description" rows="15"  required="">
                                    {{old('description')}}
                                </textarea>
                                @if ($errors->has('description'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                           

                            <div class="col-md-12">
                                 <label for="address" >Job location (Address)</label>
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       
                        <div class=" row">
                            
                               <div class="col-md-6 form-group">
                                 <label for="region" >Select region</label>
                                <select class="form-control" name="region" required="" id="region" >
                                    <option disabled="">Select region</option>
                                    @foreach(DB::table('regions')->get() as $region)
                                    <option id="{{$region->id}}" value="{{$region->name}}">{{$region->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('region'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('region') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6 form-group ">
                                 <label for="district" >Select district</label>
                                <select class="form-control" name="district" required id="district" >
                                   @foreach(DB::table('districts')->get() as $district)
                                    <option value="{{$district->name}}">{{$district->name}}</option>
                                   @endforeach
                                </select>
                                @if ($errors->has('district'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('district') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>
                        <div class=" row">
                            
                               <div class="col-md-6 form-group ">
                                 <label for="date" >Job date</label>
                                <input type="date" name="date" class="form-control @if($errors->has('date')) is-invalid @endif)" value="{{old('date')}}" required="">
                                @if ($errors->has('date'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('date') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-md-6 form-group ">
                                 <label for="Budget" >Budget (GHc)</label>
                                <input type="text" name="budget" class="form-control form-control @if($errors->has('budget')) is-invalid @endif)" value="{{old('budget')}}" placeholder="100.00" required>
                                @if ($errors->has('budget'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('budget') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>
                        <hr>
                        <div class="form-group row mb-0">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-transparent">
                                    
                                    Post ad
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

<script>
$(document).ready(function(){

  $("#region").change(function(){
    var region = $(this).find('option:selected').attr('id');
    $.ajax({
      type : 'get',
      url : '/ghregiondistrict/getdistricts/'+region,
      dataType : 'json', 
      success : function(data){
          console.log(data);
          var select = document.getElementById('district');
          $("#district").empty();
          $("#district").prop('disabled', false);
            for (var key in data){
              var name = data[key].name;
              var opt = document.createElement('option');
              opt.value = data[key].name;
              opt.text = data[key].name;
              select.appendChild(opt);
            }
      }
    })
  });

});
</script>
</body>

</html>