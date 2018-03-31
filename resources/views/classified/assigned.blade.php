<!DOCTYPE html>
<html lang="en">
<head>

  @include('layouts.head', ['title' => 'Assigned jobs'])

</head>

<body class="body-wrapper">

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg  navigation">
                    @include('layouts.nav' , ['selected' => 'ads'])
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
               @include('layouts.sidebar', ['user' => Auth::user(), 'selected' => 'assigned'])
                
            </div>
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
                <!-- Recently Favorited -->
                <div class="widget dashboard-container my-adslist">
                    <h3 class="widget-header">Assigned jobs</h3>
                    @if(count($ads) < 1)
                    
                    <p class="text-center">You have not assigned any jobs yet!</p>
                    @else
                    <table class="table table-responsive product-dashboard-table">
                        <thead>
                            <tr>
                               <th>S/no</th>
                                <th>Details</th>
                                <th>Assigned to</th>
                                
                                <th>Options</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach($ads as $ad)
                            <tr>
                                    
                                <td>{{$i}}</td>
                                <td class="product-details">
                                    <h3 class="title">{{$ad->title}}</h3>
                                   <span><strong>Due date: </strong><time>{{date('F d, Y', strtotime($ad->date))}}</time> </span>
                                    <span class="status active"><strong>Status</strong>{{$ad->status}}</span>
                                    <span class="status"><strong>Job fee</strong>GHc {{number_format($ad->budget, 2)}}</span>
                                    <span class="location"><strong>Location</strong>{{$ad->district}}, {{$ad->region}}</span>
                                </td>
                                <td>{{App\User::find($ad->assigned_to)->name}}</td>
                                 @if($ad->status == "Assigned")
                                <td class="action" data-title="Action">
                                   <div class="button-container dropdown">
                                 <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Status
                                  </button> 
                                  <div class="dropdown-menu bg-info" aria-labelledby="dropdownMenuButton">
                                   <form method="post" action="{{route('classified.update', $ad->id)}}">
                                       {{method_field('PATCH')}}
                                       {{csrf_field()}}
                                       <input type="hidden" name="status" value="Completed">
                                        <button class="dropdown-item" type="submit">Completed</button> 
                                       
                                   </form>
                                    
                                  </div>
                                </div>                         
                                </td>
                                @else
                                <td data-title="Action">
                                    @if(App\Review::where('ad_id', $ad->id)->first() !=null)
                                        <a href="{{route('classified.show', $ad->id)}}"  class="btn btn-success"  >
                                    View ad 
                                  </a>   
                                    @else
                                  <a href="#" data-toggle = "modal" data-ad= "{{$ad->id}}" data-target= "#rate_artisan" id="rate_artisan_modal" class="btn btn-success"  >
                                    Rate artisan
                                  </a>
                                    @endif                     
                                </td>
                                @endif
                            </tr>
                            <?php $i++; ?>
                            @endforeach
                          
                        </tbody>
                    </table>
                    @endif
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
@include('user.rate_artisan', ['ad' => $ad, 'artisan' => $ad->assigned_to])
<script type="text/javascript">
    $('#rate_artisan_modal').click(function(){

       var ad_id = $(this).attr('data-ad');
       $("#ad_id").val(ad_id);

    });
</script>
</body>

</html>