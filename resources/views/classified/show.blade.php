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
               @include('layouts.sidebar', ['user' => Auth::user(), 'selected' => 'ads'])
                
            </div>
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
                <!-- Recently Favorited -->
                <div class="widget dashboard-container my-adslist">
                    <h3 class="widget-header">{{$ad->title}}</h3>
                    <table class="table table-responsive product-dashboard-table">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Details</th>
                                <th>Category</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                
                                <td class="product-thumb">
                                    <img width="80px" height="auto" src="/images/products/products-1.jpg" alt="image description"></td>
                                <td class="product-details">
                                    <h3 class="title">{{$ad->title}}</h3>
                                   <span><strong>Due date: </strong><time>{{date('F d, Y', strtotime($ad->date))}}</time> </span>
                                    <span class="status active"><strong>Status</strong>{{$ad->status}}</span>
                                     <span class="status"><strong>Budget</strong>GHc {{number_format($ad->budget, 2)}}</span>
                                    <span class="location"><strong>Location</strong>{{$ad->district}}, {{$ad->region}}</span>
                                </td>
                                <td>{{$ad->category}}</td>
                                <td class="action" data-title="Action">
                                    <div class="">
                                        <ul class="list-inline justify-content-center">
                                            <li class="list-inline-item">
                                                <a data-toggle="tooltip" data-placement="top" title="View job ad" class="view" href="{{route('classified.show', $ad->id)}}">
                                                    <i class="fa fa-eye"></i>
                                                </a>        
                                            </li>
                                            <li class="list-inline-item">
                                                <a data-toggle="tooltip" data-placement="top" title="Edit ad" class="edit" href="{{route('classified.edit', $ad->id)}}">
                                                    <i class="fa fa-pencil"></i>
                                                </a>        
                                            </li>
                                            <li class="list-inline-item">
                                                <form method="post" action="{{route('classified.destroy', $ad->id)}}">
                                                    @csrf
                                                    {{method_field('delete')}}
                                                    <a class="delete" data-toggle="tooltip" data-placement="top" title="Delete job ad" href="">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                </form>
                                                
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                          
                          
                        </tbody>
                    </table>
                    
                </div>
                <!-- bids -->
                <div class="widget dashboard-container my-adslist">
                    <h3 class="widget-header">Job bids</h3>
                      @if(count($bids) < 1)
                                <p>There are currently no bids for this job</p>
                            @else
                    <table class="table table-responsive product-dashboard-table">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Details</th>
                                <th>Bid</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                            @foreach($bids as $bid)
                            <tr>
                                
                                <td class="product-thumb">
                                    <img width="80px" height="auto" src="/images/products/products-1.jpg" alt="image description"></td>
                                <td class="product-details">
                                    <h3 class="title">{{$ad->title}}</h3>
                                   <span><strong>Due date: </strong><time>{{date('F d, Y', strtotime($ad->date))}}</time> </span>
                                    <span class="status active"><strong>Status</strong>{{$ad->status}}</span>
                                    <span class="location"><strong>Location</strong>{{$ad->district}}, {{$ad->region}}</span>
                                </td>
                                <td>{{$ad->category}}</td>
                                <td class="action" data-title="Action">
                                    <div class="">
                                        <ul class="list-inline justify-content-center">
                                            <li class="list-inline-item">
                                                <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" class="view" href="{{route('classified.show', $ad->id)}}">
                                                    <i class="fa fa-eye"></i>
                                                </a>        
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="edit" href="{{route('classified.edit', $ad->id)}}">
                                                    <i class="fa fa-pencil"></i>
                                                </a>        
                                            </li>
                                            <li class="list-inline-item">
                                                <form method="post" action="{{route('classified.destroy', $ad->id)}}">
                                                    @csrf
                                                    {{method_field('delete')}}
                                                    <a class="delete" href="">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                </form>
                                                
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
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


</body>

</html>