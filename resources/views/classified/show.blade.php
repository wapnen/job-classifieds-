<!DOCTYPE html>
<html lang="en">
<head>

  @include('layouts.head', ['title' => 'Ad | '. $ad->title])

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
                <!-- Recently Favorited -->
                <div class="widget ">

                    <h3 class="widget-header">Job ad details</h3>
                    <div class="col-md-12">

                      <table class="table table-responsive ">

                          <tbody>
                            <tr><th>Ad title</th><td>{{$ad->title}}</td></tr>
                            <tr><th>Category</th><td> {{$ad->category}}</td></tr>
                            <tr><th>Due Date</th><td>{{date('F d, Y', strtotime($ad->date))}}</td></tr>
                            <tr><th>Status</th><td><span class="badge badge-success"> {{$ad->status}}</span></td></tr>
                            <tr><th>Budget</th><td> {{number_format($ad->budget, 2)}}</td></tr>
                            <tr><th>Location</th><td> {{$ad->district}} , {{$ad->region}}</td></tr>

                          </tbody>
                      </table>

                    </div>
                </div>
                <!-- bids -->
                <div class="widget ">
                    <h3 class="widget-header">Job bids</h3>
                      @if(count($bids) < 1)
                                <p>There are currently no bids for this job</p>
                            @else
                    <div class="row">
                        <div class="col-md-12 ">
                        <table class="table table-responsive ">
                        <thead>
                            <tr>
                                <th>S/no</th>
                                <th>Artisan</th>
                                <th>Artisan's specialty</th>
                                <th>Status</th>
                                <th>Bid amount</th>
                                <th>Comments</th>
                                <th class="text-center">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bids as $bid)
                            <tr>
                              <?php $i = 1; ?>
                                <td>{{$i}}</td>
                                <td><a href="" class="text-info"> {{App\User::find($bid->user_id)->name}}</a></td>
                                <td>{{App\User::find($bid->user_id)->specialty}}</td>
                                <td><span class="badge @if($bid->status == 'Accepted') badge-success @elseif($bid->status == 'Rejected') badge-danger @else badge-info @endif ">{{$bid->status}}</span> </td>
                                <td>GHc{{number_format($bid->bid_amount,2)}}</td>
                                <td >{{$bid->details}} </td>
                                <td>
                                  <div class="dropdown show">
                                    <a class="btn btn-secondary btn-main-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Options
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                      @if($ad->status != 'Assigned')
                                      <a class="dropdown-item" href="/bid/status/{{$bid->id}}/Accepted">Accept Bid</a>
                                      <a class="dropdown-item" href="/bid/status/{{$bid->id}}/Rejected">Reject Bid</a>
                                      @endif
                                      <a class="dropdown-item" href="/message/{{$bid->user_id}}">Message user</a>

                                    </div>
                                  </div>
                                </td>
                            </tr>
                          @endforeach

                        </tbody>
                    </table>
                    </div>

                    </div>                    @endif
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
