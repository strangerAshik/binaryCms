@extends('front.layout')
@section('content')

 <!-- header-section-ends --> 
    <div class="header-slider">
        <div class="slider">
            <div class="callbacks_container">
              <ul class="rslides" id="slider">
              @foreach($sliderImages as $img)
                <li>
                  <img src="{{asset('public/uploads/'.$img->calling_id)}}" alt="">
                  <div class="caption">
                 
                  </div>
                </li>
               @endforeach
               
            </ul>
          </div>
      </div>
     </div>
     
    <div class="beautifull">
        <div class="container">

        <div class="checkout-header">
             <h4>{{$welcomeMessage->title}}</h4>
            <hr>
        </div>
           <!--  <div class="beautifull-header">
               
            </div> -->
                   <p> <?php echo $welcomeMessage->content;?></p>
            
        </div>
    </div>
                <!--Latest Product-->
                    <div class="checkout-section">
                        <div class="container">
                        <div class="checkout-header">
                            <h4>Our Valuable Clients</h4>
                            <hr>
                        </div>
                                                 
                <link href="{{asset('public/frontAsset/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
                    <script src="{{asset('public/frontAsset/js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
            <!-- //pop-up-box -->
          
                  
                
    <!-- Work Ends Here -->
    

                
                
    <div class="screen-shots">
        <!--sreen-gallery-cursual-->
            <div class="sreen-gallery-cursual">
                <!-- start content_slider -->
                <style type="text/css">
                #owl-demo .item img{
                    height:150px!important;
                    width: 200px!important;
                }
                .checkout-section{
                    background-color: #FFF!important;
                }
                </style>
                   <div id="owl-demo" class="owl-carousel">
                        @foreach($clients as $info)
                        <div class="item">
                            <div class="item-grid">
                            <a target="_blank" href="#">
                                <div class="item-pic">
                                    <img target="_blank" height="150" width="200" src="{{asset('public/uploads/'.$info->calling_id)}}" />
                                </div>
                            </a>

                            </div>
                        </div>
                        @endforeach
                       
                        
                       
                       </div>
                  </div>
            <!--//sreen-gallery-cursual-->
        </div>
                <!-- requried-jsfiles-for owl -->
                            <link href="{{asset('public/frontAsset/css/owl.carousel.css')}}" rel="stylesheet">
                                <script src="{{asset('public/frontAsset/js/owl.carousel.js')}}"></script>
                                    <script>
                                $(document).ready(function() {
                                  $("#owl-demo").owlCarousel({
                                    items :4,
                                    lazyLoad : true,
                                    autoPlay : true,
                                    navigation : false,
                                    navigationText :  false,
                                    pagination : true,
                                  });
                                });
                                </script>
                              <!-- //requried-jsfiles-for owl -->

                </div>
            </div>
@stop