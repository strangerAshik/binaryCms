@extends('front.layout')

@section('content')

  <!-- Page Content -->
 <div class="blog-content">
 <div class="container">
        <div class="wrapper">
            <div class="contact">
             <div class="checkout-header">
                            <h4>About Us</h4>
                            <hr>
                </div>
        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
              <div class="col-lg-6">
                    <h3>{{$mission->title}}</h3>
                    <p>
                    {{$mission->content}}
                    </p>
           	 </div>
           
           
              <div class="col-lg-6">
                    <h3>{{$vission->title}}</h3>               
                    <p>{{$vission->content}}</p>
           	 </div>
            </div>
        </div>

        <!-- Team Members Row -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Managment Team</h3>
            </div>
            @foreach($management as $info)
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" height="200" src="{{asset('public/uploads/'.$info->calling_id)}}" alt="">
                <h2>{{$info->title}}
                    <small>{{$info->subtitle}}</small>
                </h2>
                <p><?php echo $info->content;?></p>
            </div>
            @endforeach
           
        </div>
        <!-- Team Members Row -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Engineering Team</h3>
            </div>
            @foreach($engineer as $info)
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="{{asset('public/uploads/'.$info->calling_id)}}" alt="">
                <h2>{{$info->title}}
                    <small>{{$info->subtitle}}</small>
               
                </h2>
                <p><?php echo $info->content;?></p>
            </div>
            @endforeach
        </div>
       </div>
    </div>
   </div>
 </div>
@stop