<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>TTSS</title>
<link href="{{asset('public/frontAsset/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="{{asset('public/frontAsset/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="icon" 
      type="image/png" 
      href="favicon.ico">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="# SEO" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<script src="{{asset('public/frontAsset/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('public/frontAsset/js/responsiveslides.min.js')}}"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
    
  </script>

<!---- start-smoth-scrolling---->
<script type="text/javascript" src="{{asset('public/frontAsset/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontAsset/js/easing.js')}}"></script>
 <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>
<!---End-smoth-scrolling---->
<script src="{{asset('public/frontAsset/js/bootstrap.js')}}"></script>
<!--Map-->
<script
src="http://maps.googleapis.com/maps/api/js">
</script>
<?php $lat=$contact->gps_latitude;$lon=$contact->gps_longitude?>
<script>
var myCenter=new google.maps.LatLng({{$lat}},{{$lon}});

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:17,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);

var infowindow = new google.maps.InfoWindow({
  content:"Tech Touch Science & Synergy Ltd."
  });

infowindow.open(map,marker);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

</head>
<body>
<!-- header -->
<div class="header" style="/*background-image:url('bg.jpg'); background-repeat: repeat;*/background:#4F4641" id="home">
    
        <div class="header-top" style="background-color: #FFF">

        <div class="container">
        
            <div class="icon">

                <ul>
                  <li><i class="message"></i></li>
                    <li><a href="mailto:{{$contact->email}}">{{$contact->email}}</a></li>
                        <li><i class="phone"></i></li>
                            <li><p>{{$contact->phone}}</p</li>
                </ul>
        </div>
                <div class="social-icons">
                <a href="#"><i class="icon1"></i></a>
                    <a href="#"><i class="icon2"></i></a>
                        <a href="#"><i class="icon3"></i></a>
                            
                                </div>
                                </div>
            </div>
            <div class="clearfix"></div>
            <div class="container">
       <div class="header-bottom">
       <nav class="navbar navbar-default">
                            <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                      </button>
                                    <div class="navbar-brand" >
                                       <a href="{{url('/')}}"><img src="{{asset('public/logo.jpg')}}"></a>
                                    </div>
                                </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav">
                                    <li class="<?php if($active=='home') echo 'active';?>"><a href="{{url('/')}}">Home <span class="sr-only">(current)</span></a></li>
                                    <li class="<?php if($active=='services') echo 'active';?>"><a href="{{url('services')}}">Services</a></li>
                                    <li class="<?php if($active=='products') echo 'active';?>"><a href="{{url('products')}}">Products</a></li>
                                    <li class="<?php if($active=='about') echo 'active';?>"><a href="{{url('about')}}">About Us</a></li>
                                    <li class="<?php if($active=='gallery') echo 'active';?>"><a href="{{url('galleryAll')}}">Gallery</a></li>
                                    <li class="<?php if($active=='career') echo 'active';?>"><a href="{{url('career')}}">Career</a></li>                 
                                    <li class="<?php if($active=='contact') echo 'active';?>"><a href="{{url('contact')}}">Contact</a></li>
                                </ul>
                              
                            </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
                        </nav>

                    </div>
            </div>
        </div>
            <!--Success Massage-->
            @if(Session::has('message'))
                 
                 <div id='myAlert' class='alert alert-success'>
                               <a href='#' class='close' data-dismiss='alert'>&times;</a>
                               <strong>Message: </strong>  {{Session::get('message')}}
                </div>
            @endif 
        <!--Main Content-->
        @yield('content')


       <!--footer -->
                <div class="contact-section" >
                    <div class="container" >
                        <div class="contact-grids">
                           
                                <div class="col-md-6 contact-grid">
                                    <h5>get in touch </h5>
                                        
                                        <div class="icon2">
                                            <ul>
                                                <li><i class="indicate"></i></li>
                                                <li> <p class="label1"><?php echo $contact->mailling_address;?></p></li>
                                                   
                                                    </ul>
                                                        <ul>
                                                        <li><i class="phone"></i></li>
                                                            <li><p class="label1">{{$contact->phone}}</p></li>
                                                                </ul>

                                            <ul>
                                                     <li><i class="message"></i></li>
                                                                    <li><a href="mailto:{{$contact->email}}">{{$contact->email}}</a></li>
                                                                    </ul>
                                                             
                                                            </div>
                                </div>
                                <div class="col-md-6 contact-grid">
                                    <div class="contact-map">
                                    <div id="googleMap" style="width:auto;height:200px;"></div>
                                </div>
                                </div>
                              
                               
                            </div>
                        </div>
                </div>
                <div class="footer-section">
                    <div class="container">
                        <div class="footer-left">
                            <p>&copy; 2016 TTSS . All rights  reserved </p>
                        </div>
                            <div class="bottom-menu">
                                <ul>
                                
                                    <li class="active"><a href="{{url('/')}}">Home <span class="sr-only">(current)</span></a></li>
                                    <li><a href="{{url('services')}}">Services</a></li>
                                    <li><a href="{{url('products')}}">Product</a></li>
                                    <li><a href="{{url('about')}}">About Us</a></li>
                                    <li><a href="{{url('career')}}">Career</a></li>                      
                                    <li><a href="{{url('contact')}}">Contact</a></li>
                                    @if (Auth::guest()) 
                                    <li><a href="{{url('login')}}">Login</a></li>
                                    @else
                                     <li><a href="{{url('logout')}}">Logout</a></li>
                                    @endif
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                            <script type="text/javascript">
                        $(document).ready(function() {
                            /*
                            var defaults = {
                                containerID: 'toTop', // fading element id
                                containerHoverID: 'toTopHover', // fading element hover id
                                scrollSpeed: 1200,
                                easingType: 'linear' 
                            };
                            */
                            
                            $().UItoTop({ easingType: 'easeOutQuart' });
                            
                        });
                    </script>
                <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
                </div>              
                </div>
</body>
</html>