<!DOCTYPE html>
<head>
  <title> </title>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous">
  </script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
  <div class="container-fluid">
          <div class="row">
              <div class="col-md-8">
                  <div class="card">
                      <form id="loginFormValidation" action="#" method="post">
                          <div class="header text-center">View</div>
                          <div class="content">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label class="control-label">Region <star>*</star></label>
                                          <select class="form-control" name="region" id="region_dropdown">
                                              <option value="">Select Region</option>
                                              @foreach($regions as $region)
                                                  <option value="{{$region->id}}">{{$region->name}}</option>
                                              @endforeach
                                          </select>
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label class="control-label">District <star>*</star></label>
                                          <select name="district" class="form-control" id="district_dropdown">
                                              <option> Selected</option>
                                              
                                          </select>
                                      </div>
                                  </div>
                              </div>

                              <input type="hidden" name="_token" id="_token" value="{{{ csrf_token() }}}" />
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>

<script>
$(document).ready(function(){

  $("#region_dropdown").change(function(){
    var region = $(this).val();
    $.ajax({
      type : 'get',
      url : '/ghregiondistrict/getdistricts/'+region,
      dataType : 'json', 
      success : function(data){
          console.log(data);
          var select = document.getElementById('district_dropdown');
          $("#district_dropdown").empty();
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
