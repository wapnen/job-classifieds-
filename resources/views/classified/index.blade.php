<!DOCTYPE html>
<html lang="en">
<head>

  @include('layouts.head', ['title' => 'Home'])

</head>

<body class="body-wrapper">


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg  navigation">
                   @include('layouts.nav', ['selected' => 'classified'])
                </nav>
            </div>
        </div>
    </div>
</section>

<!--===============================
=            Hero Area            =
================================-->


<!--===================================
=            Client Slider            =
====================================-->


<!--===========================================
=            Popular deals section            =
============================================-->

<section class="popular-deals section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Trending Ads</h2>
                    <p>Get a job that suites your skill.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- offer 01 -->

@foreach($ads as $ad)
<div class="col-sm-12 col-lg-4">
                <!-- product card -->
<div class="product-item bg-light">
    <div class="card">
        <div class="thumb-content">
            <!-- <div class="price">$200</div> -->
            <!-- <a href="">
                <img class="card-img-top img-fluid" src="images/products/products-2.jpg" alt="Card image cap">
            </a> -->
        </div>
        <div class="card-body">
            <h4 class="card-title"><a href="{{url('/job/ad', $ad->id)}}">{{$ad->title}}</a></h4>
            <ul class="list-inline product-meta">
                <li class="list-inline-item">
                    <a href=""><i class="fa fa-folder-open-o"></i>{{$ad->category}}</a>
                </li>
                <li class="list-inline-item">
                    <a href=""><i class="fa fa-calendar"></i>{{date('F d, Y' , strtotime($ad->date))}}</a>
                </li>
            </ul>
            <p class="card-text">{{$ad->description}}</p>
            <div class="product-ratings">
                GHc {{number_format($ad->budget, 2)}}
            </div

        </div>
    </div>
</div>
</div>



        </div>

@endforeach

{{$ads->links()}}
    </div>
</section>


<!--==========================================
=            All Category Section            =
===========================================-->




<!--============================
=            Footer            =
=============================-->
@include('layouts.footer')


</body>

</html>
