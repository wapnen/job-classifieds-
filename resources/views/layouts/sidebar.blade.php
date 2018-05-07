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
    @if($selected != 'profile')
    <a href="/profile" class="btn btn-main-sm">Edit Profile</a>
    @else
    <a href="" class="btn btn-main-sm">Change image</a>
    @endif
</div>
<!-- Dashboard Links -->
<div class="widget user-dashboard-menu">
    <ul>
        <li @if($selected == 'ads') class="active"  @endif><a href="/home"><i class="fa fa-user"></i> My Ads</a></li>
        <li @if($selected == 'bids') class="active"  @endif><a href="{{route('bid.index')}}"><i class="fa fa-bookmark-o"></i> My bids </a></li>
        <li @if($selected == 'assigned') class="active"  @endif><a href="/jobs/assigned"><i class="fa fa-file-archive-o"></i>Assigned jobs</a></li>
        <li @if($selected == 'profile') class="active"  @endif><a href="/profile"><i class="fa fa-bolt"></i> Profile<span>23</span></a></li>
        <!-- <li><a href=""><i class="fa fa-cog"></i> Logout</a></li>
        <li><a href=""><i class="fa fa-power-off"></i>Delete Account</a></li> -->
    </ul>
</div>
</div>
