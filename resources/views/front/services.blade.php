@extends('front.layout')

@section('content')
<div class="features-section">
			<div class="container">
				<div class="checkout-header">
                            <h4>Services</h4>
                            <hr>
				</div>
				<div class="features-grids">
				@foreach($services as $info)
				  <div class="col-md-12 beautiful-grid">
                           
                                  
                                    
                                    <p>
										<?php echo $info->content;?>
                                    </p>
                            
                        <div class="clearfix"></div>
                    </div>	
                    <?php break;?>
                @endforeach								
				</div>
				<div class="clearfix"></div>
						</div>
					</div>
				</div>
@stop