<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','FrontendController@home');
Route::get('/home','FrontendController@home');
Route::get('news','FrontendController@news');
Route::get('news-details/{slug}','FrontendController@newsdetail');
Route::get('service','FrontendController@service');
Route::get('service-details/{slug}','FrontendController@servicedetail');
Route::get('/partner','FrontendController@partner');
Route::get('/about','FrontendController@about');
Route::get('/gallery','FrontendController@album');
Route::get('gallery/{slug}','FrontendController@gallery');

Route::get('/contact','FrontendController@contact');
Route::get('locale/{locale}',function($locale){
	Session::put('locale',$locale);
	return redirect()->back();
});
Route::get('service-details/locale/{locale}',function($locale){
	Session::put('locale',$locale);
	return redirect()->back();
});

Route::get('news-details/locale/{locale}',function($locale){
	Session::put('locale',$locale);
	return redirect()->back();
});
Route::get('gallery/locale/{locale}',function($locale){
	Session::put('locale',$locale);
	return redirect()->back();
});



Route::post('/store-contact','backend\ContactController@store');
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'auth'], function(){
	Route::get('logout','backend\DashboardController@logout')->name('logout');

	Route::get('/cd-admin/dashboard','backend\DashboardController@home');
	Route::post('/quickmail','backend\DashboardController@quickmail');
	Route::get('view-all-mails','backend\DashboardController@view');

	Route::get('/deletemail/{id}','backend\DashboardController@del');

//Admin
	Route::get('/view-all-admin','AdminController@adminshow');
Route::get('/addadmin','AdminController@add');
Route::post('/storeadmin','AdminController@storeadmin');
Route::get('/deleteadmin/{id}','AdminController@delete');

//About  

	Route::get('/cd-admin/add-about','backend\AboutController@aboutform');
	Route::get('/cd-admin/view-all-about','backend\AboutController@view');
	Route::post('/store-about','backend\AboutController@store');
	Route::get('/cd-admin/edit-about','backend\AboutController@edit');
	Route::post('/update-about','backend\AboutController@update');


//Company Profile

	Route::get('/cd-admin/add-company-profile','backend\ProfileController@companyprofile');
	Route::get('/cd-admin/view-company-profile','backend\ProfileController@view');
	Route::post('/store-profile','backend\ProfileController@store');
	Route::get('/cd-admin/edit-company-profile','backend\ProfileController@edit');
	Route::post('/update-profile','backend\ProfileController@update');



//                 Carousel

	Route::get('/cd-admin/add-carousel','backend\CarouselController@add');
	Route::post('/store-carousel','backend\CarouselController@store');
	Route::get('/cd-admin/view-all-carousel','backend\CarouselController@view');
	Route::post('/cd-admin/updateCarousel/{id}','backend\CarouselController@updatecarousel');
	Route::get('/cd-admin/delete-carousel/{id}','backend\CarouselController@deletecarousel');

//News
	Route::get('/cd-admin/add-news','backend\NewsController@addNews');
	Route::post('/cd-admin/insertNews','backend\NewsController@insertNews');
	Route::get('/cd-admin/view-all-news','backend\NewsController@viewNews');
	Route::get('/cd-admin/edit-news/{id}','backend\NewsController@editNews');
	Route::post('/cd-admin/updateNews/{id}','backend\NewsController@updateNews');
	Route::post('/update-news-status/{id}','backend\NewsController@updatestatus');
	Route::get('/cd-admin/delete-news/{id}','backend\NewsController@deleteNews');

//Service
	Route::get('/cd-admin/add-service','backend\ServiceController@addService');
	Route::post('/cd-admin/insertService','backend\ServiceController@insertService');
	Route::get('/cd-admin/view-all-service','backend\ServiceController@viewService');
	Route::get('/cd-admin/edit-service/{id}','backend\ServiceController@editService');
	Route::post('/cd-admin/updateService/{id}','backend\ServiceController@updateService');
	Route::post('/update-service-status/{id}','backend\ServiceController@updatestatus');
	Route::get('/cd-admin/delete-service/{id}','backend\ServiceController@deleteService');



//Gallery
	Route::get('/album-add','backend\GalleryController@add');
	Route::post('/storealbum','backend\GalleryController@store');
	Route::get('/album-view','backend\GalleryController@view');
	Route::post('/statusal/{id}','backend\GalleryController@status');
	Route::get('//cd-admin/delete-album/{id}','backend\GalleryController@deletealbum');
	Route::get('/deleteimage/{id}','backend\GalleryController@deleteimage');
	Route::get('/image-add/{id}','backend\GalleryController@addimage');
	Route::post('/imagestore/{id}','backend\GalleryController@storeimage');
	Route::get('/image-view/{id}','backend\GalleryController@image');



//SEO
	Route::get('/seo-add','backend\SeoController@add');
	Route::get('/seo-view','backend\SeoController@view');
	Route::post('/seostore','backend\SeoController@store');
	Route::get('/editseo/{id}','backend\SeoController@edit');
	Route::post('/updateseo/{id}','backend\SeoController@updateseo');
	Route::get('/deleteseo/{id}','backend\SeoController@delete');

//Partner


	Route::get('/cd-admin/add-partner','backend\PartnerController@addPartner');
	Route::post('store-partner', 'backend\PartnerController@store');
	Route::get('cd-admin/view-partner','backend\PartnerController@view');
	Route::get('/cd-admin/edit-partner/{id}','backend\PartnerController@editPartner');
	Route::post('update-partner/{id}','backend\PartnerController@updatePartner');
	Route::get('/cd-admin/delete-partner/{id}','backend\PartnerController@deletePartner');



//Contact
	Route::get('/createcontact','backend\ContactController@addcontact');
	Route::get('/viewcontact','backend\ContactController@contact');
	Route::get('/replies','backend\ContactController@reply');
	Route::get('/replycontact/{id}','backend\ContactController@replyform');
	Route::post('/storereply/{id}','backend\ContactController@storereply');
	Route::get('/deleteinbox/{id}','backend\ContactController@deleteinbox');
	Route::get('/deletereply/{id}','backend\ContactController@deletereply');

});