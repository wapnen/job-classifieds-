<!DOCTYPE html>
<html lang="en">
<head>

  @include('layouts.head', ['title' => 'My bids'])

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
               @include('layouts.sidebar', ['user' => Auth::user(), 'selected' => 'bids'])
                
            </div>
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
                <!-- Recently Favorited -->
                <div class="widget ">
                    <h3 class="widget-header">My Ads</h3>
                    <div class="col-md-12  table-responsive ">
                        <table class="table">
                        <thead>
                            <tr>
                                
                                <th>S/no</th>
                                <th>Details</th>
                                <th class="text-center">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach($bids as $bid)
                            <tr>
                                <td>{{$i}}</td>
                                <td >
                                    <h3 class="title">{{App\Classified::find($bid->ad_id)->title}}</h3>
                                   
                                    <span class="status active"><strong>Status</strong>{{$bid->status}}</span><br>
                                    <span class="status"><strong>Bid amount</strong>GHc {{number_format($bid->bid_amount, 2)}}</span>
                                    
                                </td>
                                
                                <td  data-title="Action">
                                    <a href="message/{{App\Classified::find($bid->ad_id)->user_id}}" class="btn btn-success btn-sm">Message User</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                            @endforeach
                          
                        </tbody>
                    </table>
                    </div>
                    
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