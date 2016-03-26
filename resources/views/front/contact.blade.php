@extends('front.layout')
@section('content')

			<!-- content-section-starts -->
	<div class="blog-content">
		<div class="container">
        <div class="wrapper">
        <div class="checkout-header">
                            <h4>Contact</h4>
                            <hr>
  </div>
			<div class="contact">

	       		

				<div class="section group">	
				<div class="col span_2_of_4">
						
						<div class="contact-form">
							<h2 class="style">Contact Us</h2>
							<form method="POST" action="{{url('sendEmail')}}">
								<div>
									<span><label>Name</label></span>
									<span><input name="name" type="text" class="textbox"></span>
								</div>
								<div>
									<span><label>Email</label></span>
									<span><input name='email' type="text" class="textbox"></span>
								</div>
								<div>
									<span><label>Subject</label></span>
									<span><input name="subject" type="text" class="textbox"></span>
								</div>
								<div>
									<span><label>Message</label></span>
									<span><textarea name="message"> </textarea></span>
								</div>
								<input type="submit" value="Submit me">
							</form>
						</div>
					</div>	
					<br>		
					
					<div class="col span_1_of_2">
						<div class="contact_info">
							<h2>Find Us Here</h2>
								<div class="contact-map">
									<div id="googleMap" style="width:700px;height:200px;"></div>
								</div>
						</div>
						<div class="company_address">
							<h2>Company Address </h2>
							
								<?php echo $contact->mailling_address;?>
							
							<p>Phone:{{$contact->phone}}</p>
							<p>Mobile:{{$contact->moblie}}</p>
							<p>Fax:{{$contact->fax}}</p>
							<p>Email: <a href="mailto:{{$contact->email}}">{{$contact->email}}</a></p>
							<p>Follow on: 
									@foreach($socialMedia as $info)
									<a href="{{$info->hyper_link}}">{{$info->title}}</a> |
									@endforeach
							</p>
						</div>
						<div class="clearfix"></div>
					</div>				
							
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		</div>
	</div>
@stop