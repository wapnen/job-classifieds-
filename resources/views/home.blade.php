<!DOCTYPE html>
<html lang="en">
<head>

  @include('layouts.head', ['title' => 'Dashboard'])
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body class="body-wrapper">

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg  navigation">
                    @include('layouts.nav' , ['selected' => 'home'])
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
                    <h3 class="widget-header">My Ads</h3>
                    @if(count($ads) < 1)

                    <p class="text-center">You have not posted any job ads yet!</p>
                    @else
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
                            @foreach($ads as $ad)
                            <tr>

                                <td class="product-thumb">
                                    <img width="80px" height="auto" src="images/products/products-1.jpg" alt="image description"></td>
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
                                                <form method="post" action="{{route('classified.destroy', $ad->id)}}" id="form{{$ad->id}}">
                                                    @csrf
                                                    {{method_field('delete')}}
                                                    <a class="delete" href="#" id="{{$ad->id}}" ><i class="fa fa-trash"></i></a>

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

<script type="text/javascript">
$('.delete').click(function(e){
    alert($(this).attr('id'));
    e.preventDefault(e);
    var form = $(this).attr('id');

    swal({
      title: "Are you sure?",
      text: "You will not be able to undo this!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $("#form"+form).submit();
        // swal("Done!", {
        //   icon: "success",
        // });
      }
    });
});
</script>
</body>

</html>
