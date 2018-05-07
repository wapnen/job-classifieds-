<!DOCTYPE html>
<html lang="en">
<head>

  @include('layouts.head', ['title' => 'Profile'])

</head>

<body class="body-wrapper">

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg  navigation">
                    @include('layouts.nav' , ['selected' => 'profile'])
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
              <div class="sidebar">
             <!-- User Widget -->
             <div class="widget user-dashboard-profile">
                 <!-- User Image -->
                 <div class="profile-thumb">
                     <img src="/images/user/user.png" alt="" class="rounded-circle">
                 </div>
                 <!-- User Name -->
                 <h5 class="text-center">{{$user->name}}</h5>
                 <p>Joined {{date('F d, Y', strtotime($user->created_at))}}</p>
                 @for($i =0 ; $i < $rating; $i++)
                 <li class="list-inline-item">
                   <i class="fa fa-star"></i>
                 </li>
               @endfor
               <br>
               <br>
               <a href="/message/{{$user->id}}" class="btn btn-main-sm">Send message</a>
             </div>
             </div>
            </div>
            <div class="col-md-8">
      				<div class="product-details">


      					<div class="content">
      						<ul class="nav nav-pills  justify-content-center" id="pills-tab" role="tablist">
      							<li class="nav-item">
      								<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Portfolio</a>
      							</li>

      							<li class="nav-item">
      								<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Reviews</a>
      							</li>
      						</ul>
      						<div class="tab-content" id="pills-tabContent">
      							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
      								<h3 class="tab-title">Completed jobs</h3>
                      <div class="table table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>S/no</th>
                              <th>Job description</th>
                              <th>Rating</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i = 1; ?>
                            @foreach(App\Classified::where(['status' => 'Completed', 'assigned_to' => $user->id])->get() as $task)
                            <tr>
                              <td>{{$i}}</td>
                              <td>{{$task->description}}</td>
                              <?php $rating = App\Review::where('ad_id', $task->id)->first(); ?>
                              <td>
                                @for($i =0 ; $i < $rating->rating; $i++)
                                <li class="list-inline-item">
                                  <i class="fa fa-star"></i>
                                </li>
                              @endfor

                            </td>
                          </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>

      							</div>

      							<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
      								<h3 class="tab-title">User Reviews</h3>
                      @foreach(App\Review::where('user_id', $user->id)->get() as $review)
                      <div class="product-review">
      							  		<div class="media">
      							  			<!-- Avater -->
      							  			<img src="/images/user/user-thumb.jpg" alt="avater">
      							  			<div class="media-body">
      							  				<!-- Ratings -->
      							  				<div class="ratings">
      							  					<ul class="list-inline">

                                  @for($i =0 ; $i < $review->rating; $i++)
      							  						<li class="list-inline-item">
      							  							<i class="fa fa-star"></i>
      							  						</li>
                                @endfor

      							  					</ul>
      							  				</div>
      							  				<div class="name">
                                <?php $ad = App\Classified::find($review->ad_id); ?>
      							  					<h5>{{App\User::find($ad->user_id)->name}}</h5>
      							  				</div>
      							  				<div class="date">
      							  					<p>{{date('d M, Y', strtotime($review->created_at))}}</p>
      							  				</div>
      							  				<div class="review-comment">
      							  					<p>
      							  						{{$review->review}}
      							  					</p>
      							  				</div>
      							  			</div>
      							  		</div>

      							  	</div>
                        @endforeach
      							</div>
      						</div>
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
