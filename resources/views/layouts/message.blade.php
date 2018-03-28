<!DOCTYPE html>
<html lang="en">
<head>

  @include('layouts.head', ['title' => 'Messages'])

</head>

<body class="body-wrapper">

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg  navigation">
                    @include('layouts.nav', ['selected' => 'messages'])
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
                   <h1 class="text-center">Messages</h3>
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
                <div class="widget dashboard-container ">
                    <h3 class="widget-header"> <span class="product-thumb"><img width="40px" height="auto" src="/images/user/user.png" alt="image description"></span> {{$user->name}} </h3>
                    <div class="bg-gray container" style="height: 400px; width: 100%; overflow-y: scroll;" >
                     @if(count($messages) < 1)
                     <div class="text-center" style="margin-top: 3%;">
                         <h5 class="badge badge-info">No messages</h5>

                     </div> 
                    
                     @else   
                     @foreach($messages as $message)
                        <div style="margin-top: 3%;">
                            @if($message->recipient_id == $user->id) 
                            <div class="text-left">
                                
                                <p class=" text-left" style="border-radius: 20%; padding: 2%; display: inline; background-color: blue; color: white;">{{$message->message}}</p>
                            
                            </div>
                            @else
                                <div class="text-right">
                                    
                                <p style="border-radius: 20%; padding: 2%; display: inline; background-color: #A2DED0; color: white; ">{{$message->message}}</p>
                                </div>
                            @endif
                            <br>
                        </div>
                     @endforeach       
                     @endif
                    </div>
                    <div class="container">
                        <form method="post" action="{{route('message.store')}}">
                            @csrf
                            <input type="hidden" name="recipient_id" value="{{$user->id}}">
                            <div class="input-group mb-3">
                          <textarea class="form-control" name="message"></textarea>
                          <div class="input-group-append">
                            <button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i></button>
                          </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                 <div class="sidebar">

                <div class="widget user-dashboard-menu">
                    <ul>
                      <?php 
                                        $recipients = App\Message::where('sender_id', Auth::user()->id)->orWhere('recipient_id', Auth::user()->id)->get(); 
                                        $recipient_arr = [];
                                        foreach ($recipients as $value) {
                                            if (!in_array($value->recipient_id, $recipient_arr) ) {
                                                $recipient_arr[] = $value->recipient_id;
                                            }
                                        }

                                        $recipients = App\User::find($recipient_arr);
                                ?>
                        @foreach($recipients as $recipient)
                            @if($recipient->id != Auth::user()->id) 
                        <li class="@if($user->id == $recipient->user_id) active  @endif" >
                            <a href=""><i class="product-thumb"><img width="40px" height="auto" src="/images/user/user.png" alt="image description"></i> {{$recipient->name}} <span>{{count(App\Message::where(['recipient_id' => Auth::user()->id , 'sender_id' => $recipient->id])->get())}}</span></a>
                        </li>
                        @endif
                         @endforeach
                        
                    </ul>
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