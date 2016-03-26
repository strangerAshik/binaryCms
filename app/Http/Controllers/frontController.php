<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class frontController extends Controller
{
	//provide the last provided contact infos
	protected function getContact(){
		return DB::table('contacts')->orderBy('id','desc')->first();
	}
    public  function home(){
    	//contact info

    	 $contact=$this->getContact();
    	 //welcome content
    	 $welcomeMessage=DB::table('contents')->where('unique_key','welcome_message')->first();
    	 //services
    	 $services=DB::table('contents')->where('category_id','6')->get();
    	 //home product
    	 $homeProducts=DB::table('contents')->where('unique_key','home_product')->get();
    	 //All product Slider
    	 $clients=DB::table('contents')
    	 				->Join('documents','contents.id','=','documents.mother_id')
    	 				->where('category_id','16')    	 				
    	 				->get();
    	 //Slider
    	 	$sliderImages=DB::table('contents')
    	 					->Join('documents','contents.id','=','documents.mother_id')
    	 					->where('unique_key','home_slider')
    	 					->get();

    	return view('front.welcome')
    			->with('contact',$contact)
    			->with('welcomeMessage',$welcomeMessage)
    			->with('services',$services)
    			->with('homeProducts',$homeProducts)
    			->with('clients',$clients)
          ->with('sliderImages',$sliderImages)
    			->with('active','home')
    	;
    }
  public function contact(){
  	//contact info
    	 $contact=$this->getContact();
    //social media
    	 $socialMedia=DB::table('contents')->where('category_id','13')->get();
  	return view('front.contact',['socialMedia'=>$socialMedia])
    			->with('contact',$contact)
          ->with('active','contact')

    			;

  }
  public function services(){
  	//contact info
    	 $contact=$this->getContact();
    //All Services
       $services=DB::table('contents')->where('category_id','6')->orderBy('id','desc')->get();
    	 return view('front.services',['services'=>$services])
    			->with('contact',$contact)
          ->with('active','services')
    			;
  }
  public function products(){
  		//contact info
    	 $contact=$this->getContact();
    	 //All product Slider
    	 $allProduct=DB::table('contents')
    	 				->where('category_id','7')    	 				
    	 				->paginate(10);
    	 return view('front.products')
    			->with('contact',$contact)
    			->with('allProduct',$allProduct)
          ->with('active','products')
    			;
  }
  public function aboutUs(){
  	//contact info
    	 $contact=$this->getContact();
    //mission
    	 $mission=DB::table('contents')->where('category_id','9')->orderBy('id','desc')->first();
    //Vision
    	 $vission=DB::table('contents')->where('category_id','10')->orderBy('id','desc')->first();
    //management 
    	 $management=DB::table('contents')
    	 ->Join('documents','contents.id','=','documents.mother_id')
    	 ->where('category_id','11')->get();
   //Engineer 
    	 $engineer=DB::table('contents')
    	 ->Join('documents','contents.id','=','documents.mother_id')
    	 ->where('category_id','12')->get();

    	 return view('front.aboutUs',['mission'=>$mission,'vission'=>$vission,'management'=>$management,'engineer'=>$engineer])
    			->with('contact',$contact)
          ->with('active','about')
    			;
  }
  //career
  public function career(){
    //contact info
       $contact=$this->getContact();
    //career
       $career=DB::table('contents')->where('category_id','15')->orderBy('id','desc')->first();

    return view('front.career',['contact'=>$contact,'career'=>$career])
            ->with('active','career')
        ;
  }
  //contact email
  public function sendEmail(Request $request){
  	$name=$request->input('name');
  	$email=$request->input('email');
  	$subject=$request->input('subject');
  	$emailMessage=$request->input('message');

  	//get contact email
  	$contactEmail=DB::table('contacts')->orderBy('id','desc')->first();
  	//mail 

	$to = $contactEmail->email;
	$subject = $subject;

	$message = "
	<html>
	<head>
	<title>HTML email</title>
	</head>
	<h2>$subject</h2>
	<body>
		$emailMessage
	</body>
	</html>
	";

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: <contacts@techtouchss.com>' . "\r\n";
	//$headers .= 'Cc: myboss@example.com' . "\r\n";

	mail($to,$subject,$message,$headers);
	return back()->with('message','Message Send!');
  }
  public function galleryAll(){
  	//contact info
    	 $contact=$this->getContact();
    //gallery view
    	 $allGallery=DB::table('contents')
    	 			->where('category_id','14')
    	 			->get();

    	 return view('front.galleryAll',['contact'=>$contact,'allGallery'=>$allGallery])
        ->with('active','gallery')
       ;
  }
  public function singleGallery($id){
  	//contact info
    	 $contact=$this->getContact();
    //single gallery
    	 $singleGallery=DB::table('contents')
    	 			->Join('documents','contents.id','=','documents.mother_id')
    	 			->where('category_id','14')
    	 			->where('contents.id',$id)
    	 			->get();
     return view('front.singleGallery',['contact'=>$contact,'singleGallery'=>$singleGallery])
             ->with('active','gallery')
     ;
  }
}
