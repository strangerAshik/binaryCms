@extends('front.layout')
@section('content')

 <div class="blog-content">
 <div class="container">
        <div class="wrapper">
<div class="row">

               
	@foreach($allGallery as $info)
		<?php $imgs=App\contentModel::getFirstImageForGallery($info->id) ;?>

           
                    
                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="" href="{{url('singleGallery/'.$info->id)}}"><img class="thumbnail img-responsive" src="{{asset('public/uploads/'.$imgs->calling_id)}}"></a>
                   <a title="" href="{{url('singleGallery/'.$info->id)}}"> <h3>Title: {{$info->title}}</h3></a>
                    </div>
              
       
	
	@endforeach
		
		</div>
		</div>
		</div>
		</div>


@stop