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
                    @include('layouts.nav' , ['selected' => 'ads'])
                </nav>
            </div>
        </div>
    </div>
</section>
<!--==================================
=            User Profile            =
===================================-->
<section class="page-search">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Advance Search -->
                <div class="advance-search">
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--===================================
=            Store Section            =
====================================-->
<section class="section bg-gray">
    <!-- Container Start -->
    <div class="container">
        <div class="row">
            <!-- Left sidebar -->
            <div class="col-md-8">
                <div class="product-details">
                    <h1 class="product-title">{{$ad->title}}</h1>
                    <div class="product-meta">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-user-o"></i> By <a href="">{{App\User::find($ad->user_id)->name}}</a></li>
                            <li class="list-inline-item"><i class="fa fa-folder-open-o"></i> Category<a href="">{{$ad->category}}</a></li>
                            <li class="list-inline-item"><i class="fa fa-location-arrow"></i> Location<a href="">{{$ad->address}}, {{$ad->district}} , {{$ad->region}}</a></li>
                        </ul>
                    </div>
                    
                    <div class="content">
                        <ul class="nav nav-pills  justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Description</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Job bids</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <h3 class="tab-title">Job description</h3>
                                <p>{{$ad->description}}</p>
                            </div>
                            
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <h3 class="tab-title">Bids for this job</h3>
                                <div class="product-review">
                                   @foreach(App\Bid::where('ad_id', $ad->id)->get() as $bid)
                                    <div class="media">
                                        <!-- Avater -->
                                        <img src="/images/user/user.png" alt="avater">
                                        <div class="media-body">
                                            <!-- Ratings -->
                                            <div class="ratings">
                                                <span class="badge @if($bid->status == 'Active' ) badge-info @elseif($bid->status == 'Rejected' ) badge-danger @else badge-success @endif">{{$bid->status}}</span>
                                            </div>
                                            <div class="name">
                                                <h5>{{App\User::find($bid->user_id)->name}}</h5>
                                            </div>
                                            <div class="date">
                                                <p>{{date('F d, Y' , strtotime($bid->created_at))}}</p>
                                            </div>
                                            <div class="review-comment">
                                                <p>
                                                    {{$bid->details}}
                                                </p>
                                            </div>
                                            @if(Auth::user()->id == $bid->user_id && $ad->status == "Active")
                                            <div class="button-container text-right">
                                                <a href="" class=""><i class="fa fa-pencil " style="color: green;"></i></a>
                                                <a href="" class=""><i class="fa fa-trash " style="color: red;"></i></a>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    @endforeach
                                    @if(Auth::user()->id != $ad->user_id && count(App\Bid::where('user_id', Auth::user()->id)->get()) == 0 )
                                    <div class="review-submission">
                                        <h3 class="tab-title">Submit your bid</h3>
                                        <!-- Rate -->
                                       
                                        <div class="review-submit">
                                            <form action="{{route('bid.store')}}" method="post" class="row">
                                                {{csrf_field()}}
                                                <input type="hidden" value="{{$ad->id}}" name="ad_id">
                                                <div class="col-lg-12">
                                                    <label>Bid amount</label>
                                                    <input type="text" name="bid_amount" id="bid_amount" class="form-control" value="{{old('bid_amount')}}" placeholder="0.00" required>
                                                </div>
                                                
                                                <div class="col-12">
                                                    <textarea name="details" id="details" rows="10" class="form-control" placeholder="Message">{{old('details')}}</textarea>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-main">Sumbit bid</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sidebar">
                    <div class="widget price text-center">
                        <h4>Budget</h4>
                        <p>GHc{{number_format($ad->budget, 2)}}</p>
                    </div>
                   
                    <!-- Map Widget -->
                    <div class="widget map">
                        <div class="map">
                            <div id="map"></div>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
            
        </div>
    </div>
    <!-- Container End -->
</section>
<!--============================
=            Footer            =
=============================-->
@include('layouts.footer')


</body>

</html>