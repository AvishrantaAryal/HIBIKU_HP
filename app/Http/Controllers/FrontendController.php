<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\News;
use App\Gallery;
use App\Image;
use App\Service;
use App\Partner;
use App\Profile;
use App\Carousel;
use App\Seo;
class FrontendController extends Controller
{
	public function home(){

		$getonecarosels =Carousel::where('status','active')->orderBy('id','desc')->get()->first();
		$getcarosels = Carousel::where('id','!=',$getonecarosels['id'])->where('status','active')->orderBy('id','desc')->get();
		$about = About::get()->first();
		$news = News::where('status','active')->orderBy('id','desc')->take(10)->get();
		$seo = Seo::where('name','Home')->get()->first();
		return view('home.home',compact('getonecarosels','getcarosels','about','news','seo'));
	}

	public function about(){
		$seo = Seo::where('name','company')->get()->first();
		$profile = Profile::get()->first();
		return view('about.about',compact('profile','seo'));
	}



	public function news(){
		$seo = Seo::where('name','news')->get()->first();
		$news = News::where('status','active')->orderby('id','Desc')->get();
		return view('news.news-list',compact('news','seo'));

	}

	public function newsdetail($slug){
		$blog = News::where('slug',$slug)->get()->first();
		$blo = News::where('id','!=',$blog['id'])->orderby('id','Desc')->take(3)->get();
		return view('news.news-dynamic',compact('blog','blo'));
	}


	public function service(){
		$seo = Seo::where('name','Service')->get()->first();
		$service = Service::where('status','active')->get();
		return view('service.service-list',compact('service','seo'));

	}

	public function servicedetail($slug){
		$blog = Service::where('slug',$slug)->get()->first();
		$blo = Service::where('id','!=',$blog['id'])->orderby('id','Desc')->take(3)->get();
		return view('service.service-dynamic',compact('blog','blo'));
	}

	public function album(){
		$seo = Seo::where('name','Gallery')->get()->first();
		$gallery = Gallery::where('status','active')->orderBy('id','DESC')->get();
		return view('gallery.album',compact('gallery','seo'));
	}

	public function gallery($slug){
		$gallery = Gallery::where('slug',$slug)->get()->first();
		$gallery_id = $gallery['id'];
		$images=Image::where('gallery_id',$gallery_id)->orderBy('id','desc')->get();
		return view('gallery.gallery',compact('images','gallery'));

	}
	public function contact(){
		$seo = Seo::where('name','Contact')->get()->first();
		return view('contact.contact',compact('seo'));
	}

	public  function partner(){
		$seo = Seo::where('name','About')->get()->first();
		return view('about.partner',compact('seo'));

	}
	
}
