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
                   @include('layouts.nav')
                </nav>
            </div>
        </div>
    </div>
</section>

<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area bg-1 text-center overly">
    <!-- Container Start -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Header Contetnt -->
                <div class="content-block">
                    <h1>Find a job near you </h1>
                    <p>Join the millions who work for and hire each other <br> everyday in local communities around Ghana</p>
                    <div class="short-popular-category-list text-center">
                        <h2>Popular Category</h2>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-wrench"></i> Maintenance</a></li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-briefcase"></i> Corporate</a>
                            </li>
                                                        <li class="list-inline-item">
                                <a href=""><i class="fa fa-paint-brush"></i>Design</a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-smile"></i> Beauty</a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
                <!-- Advance Search -->
                <div class="advance-search">
                    <form action="#">
                        <div class="row">
                            <!-- Store Search -->
                            <div class="col-lg-5 col-md-12">
                                <div class="block d-flex">
                                    <label>Select category</label>
                                     <select class="form-control mb-2 mr-sm-2 mb-sm-0" id="search" name="category" required id="category" >
                                    <option value="All categories" selected=""> All categories</option>
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
                            <div class="col-lg-5 col-md-12">
                                <div class="block d-flex">
                                    
                                    <label for="region" >Select region</label>
                                <select class="form-control mb-2 mr-sm-2 mb-sm-0" name="region" required="" id="region" >
                                    <option value="All regions" selected=""> All regions</option>
                                    @foreach(DB::table('regions')->get() as $region)
                                    <option id="{{$region->id}}" value="{{$region->name}}">{{$region->name}}</option>
                                    @endforeach
                                </select>
                                    <!-- Search Button -->
                                    
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-main">Search</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
                
            </div>
        </div>
    </div>
    <!-- Container End -->
</section>

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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- offer 01 -->
            <div class="col-sm-12 col-lg-4">
                <!-- product card -->
<div class="product-item bg-light">
    <div class="card">
        <div class="thumb-content">
            <!-- <div class="price">$200</div> -->
            <!-- <a href="">
                <img class="card-img-top img-fluid" src="images/products/products-1.jpg" alt="Card image cap">
            </a> -->
        </div>
        <div class="card-body">
            <h4 class="card-title"><a href="">11inch Macbook Air</a></h4>
            <ul class="list-inline product-meta">
                <li class="list-inline-item">
                    <a href=""><i class="fa fa-folder-open-o"></i>Electronics</a>
                </li>
                <li class="list-inline-item">
                    <a href=""><i class="fa fa-calendar"></i>26th December</a>
                </li>
            </ul>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
            <div class="product-ratings">
                <ul class="list-inline">
                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
@foreach(App\Classified::where('status', 'Active')->orderByRaw('RAND()')->take(3)->get() as $ad)
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
            <h4 class="card-title"><a href="">{{$ad->title}}</a></h4>
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
            </div>
        </div>
    </div>
</div>
</div>
@endforeach
            <div class="col-sm-12 col-lg-4">
                <!-- product card -->
<div class="product-item bg-light">
    <div class="card">
        <div class="thumb-content">
            <!-- <div class="price">$200</div> -->
            <!-- <a href="">
                <img class="card-img-top img-fluid" src="images/products/products-3.jpg" alt="Card image cap">
            </a> -->
        </div>
        <div class="card-body">
            <h4 class="card-title"><a href="">11inch Macbook Air</a></h4>
            <ul class="list-inline product-meta">
                <li class="list-inline-item">
                    <a href=""><i class="fa fa-folder-open-o"></i>Electronics</a>
                </li>
                <li class="list-inline-item">
                    <a href=""><i class="fa fa-calendar"></i>26th December</a>
                </li>
            </ul>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
            <div class="product-ratings">
                <ul class="list-inline">
                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                </ul>
            </div>
        </div>
    </div>
</div>



            </div>
            
            
        </div>
    </div>
</section>


<!--==========================================
=            All Category Section            =
===========================================-->

<section class=" section">
    <!-- Container Start -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section title -->
                <div class="section-title">
                    <h2>All Categories</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, provident!</p>
                </div>
                <div class="row">
                    <!-- Category list -->
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-laptop icon-bg-1"></i> 
                                <h4>Computer & software</h4>
                            </div>
                           
                        </div>
                    </div> <!-- /Category List -->
                    <!-- Category list -->
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-mobile icon-bg-2"></i> 
                                <h4>Mobile & Cell</h4>
                            </div>
                            
                        </div>
                    </div> <!-- /Category List -->
                    <!-- Category list -->
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-paint-brush icon-bg-3"></i> 
                                <h4>Creative</h4>
                            </div>
                            
                        </div>
                    </div> <!-- /Category List -->
                    <!-- Category list -->
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-calendar icon-bg-4"></i> 
                                <h4>Event management</h4>
                            </div>
                            
                        </div>
                    </div> <!-- /Category List -->
                    <!-- Category list -->
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-tree icon-bg-5"></i> 
                                <h4>Farm & Garden</h4>
                            </div>
                            
                        </div>
                    </div> <!-- /Category List -->
                    <!-- Category list -->
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-car icon-bg-6"></i> 
                                <h4>Automotive</h4>
                            </div>
                            
                        </div>
                    </div> <!-- /Category List -->
                    <!-- Category list -->
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-graduation-cap icon-bg-7"></i> 
                                <h4>Lessons</h4>
                            </div>
                            
                        </div>
                    </div> <!-- /Category List -->
                    <!-- Category list -->
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-user-md icon-bg-8"></i> 
                                <h4>Therapeutic</h4>
                            </div>
                            
                        </div>
                    </div> 
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-bath icon-bg-4"></i> 
                                <h4>Plumbing</h4>
                            </div>
                            
                        </div>
                    </div> 
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-bolt icon-bg-3"></i> 
                                <h4>Electrical & Lighting</h4>
                            </div>
                            
                        </div>
                    </div> 
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-gavel icon-bg-2"></i> 
                                <h4>Carpentry & Furniture</h4>
                            </div>
                            
                        </div>
                    </div> 
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-wrench icon-bg-1"></i> 
                                <h4>Labor & movement</h4>
                            </div>
                            
                        </div>
                    </div> 
                    <!-- /Category List -->
                    
                    
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