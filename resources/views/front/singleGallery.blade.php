@extends('front.layout')
@section('content')
<style type="text/css">
	.hide-bullets {
    list-style:none;
    margin-left: -40px;
    margin-top:20px;
}

.thumbnail {
    padding: 0;
}

.carousel-inner>.item>img, .carousel-inner>.item>a>img {
    width: 100%;
}
</style>
 <div class="blog-content">
 <div class="container">
 
        <div class="wrapper">
        <!-- Slider -->
        <div class="row">
       
       

            <div class="col-sm-6" id="slider-thumbs">
		 		<table class="table table-striped table-bordered table-hover">
			          @foreach($singleGallery as $info)
			        	<tr>
			        		<th>Title</th><td>{{$info->title}}</td>
			        	</tr>
			        	@if($info->content)
			        	<tr>
			        		<th>Descrioption</th><td> <?php echo $info->content; ?></td>
			        	</tr>
			        	@endif
			        	<?php break; ?>
			      	  @endforeach
		        </table>
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                <?php $num=0;?>
                @foreach($singleGallery as $info)
                    <li class="col-md-4">
                        <a class="thumbnail" id="carousel-selector-{{$num}}">
                            <img src="{{asset('public/uploads/'.$info->calling_id)}}">
                        </a>
                    </li>
                    <?php ++$num;?>
                @endforeach

                 
                </ul>
            </div>
            <div class="col-sm-6">
                <div class="col-xs-12" id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                <?php $num=0;?>
              					 
                                   @foreach($singleGallery as $info)
                                    
                				  <div class="item <?php if($num==0) echo 'active';?>" data-slide-number="{{$num}}">
                                        <img height="480" width="470" src="{{asset('public/uploads/'.$info->calling_id)}}"></div>
                                   <?php ++$num;?>
               						 @endforeach

                                 
                                </div>
                                <!-- Carousel nav -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Slider-->
        </div>

    </div>
</div>
</div>

        <script type="text/javascript">
        	 jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
        </script>
@stop