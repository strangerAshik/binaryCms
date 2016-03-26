@extends('front.layout')

@section('content')

 <div class="blog-content">
 <div class="container">

  <div class="checkout-header">
                            <h4>Career</h4>
                            <hr>
  </div>
        <div class="wrapper">
            <div class="contact">
				
				<p>
					<?php echo $career->content;?>
				</p>
            </div>
        </div>
 </div>
 </div>

 @stop