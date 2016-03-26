@extends('front.layout')
@section('content')
<style type="text/css">
    .margin{
        margin-left:10px; 
    }
    .img-thumbnail{
        height: 200px;
        width: 300px;
    }
</style>
<div class="blog-content">
        <div class="container">
        <div class="wrapper">
            <div class="contact">
                <div class="checkout-header">
                            <h4>Products</h4>
                            <hr>
                </div>
        <!-- Projects Row -->
        <div class="row" style="margin-bottom: 40px">
        <div class="table-responsive">
        <table class="table table-bordered table-hover">           
            <tr>
                <th>Name of the Company & Address</th>
                <th>Product Details</th>
                <th>Image</th>
            </tr>
            @foreach($allProduct as $info)
             <tr>
                <td class="col-md-3">  
                    <div class="margin">
                      <p ><?php echo $info->content;?></p>
                        
                        
                    </div>              
                </td>
                <td  class="col-md-3"> 
                  <div class="margin">                  
                  <p><?php echo $info->more_content;?></p>
                  </div>
                </td>
                <td  class="col-md-6">
                   <?php $images=App\contentModel::documents($info->id,'contents');?>
                   <span>
                   <div >   
                   @foreach($images as $img)
                   <div class="col-md-6">
                    <a  target="_blank" href="{{$info->hyper_link}}">
                            <img  class="img-thumbnail" src="{{asset('public/uploads/'.$img->calling_id)}}" alt="">                     
                        </a>
                    </div>
                   
                   @endforeach
                   </div>
                   </span>
                </td>
             </tr>

           
            @endforeach
        </table>
        </div>
          
            
           
        </div>
        <!-- /.row -->
       
        


        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                 {!! $allProduct->render() !!}
            </div>
        </div>
        <!-- /.row -->
        </div>
        </div>
        </div>
        </div>

@stop