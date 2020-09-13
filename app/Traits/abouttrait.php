<?php
namespace App\Traits;

use Carbon\Carbon;
use App\About;
use Illuminate\Http\Request; 
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SlugController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


trait abouttrait{
	use ImageController;

	
	public function aboutform(){
		return view('cd-admin.about.add-new-about');
	}

	public function view(){
		$about = About::get()->first();
		return view('cd-admin.about.view-all-about',compact('about'));
	}

	public function edit(){
		$about =  About::get()->first();
		return view('cd-admin.about.edit-about',compact('about'));
	}

	public function store(){
		$a=[];
		$data = $this->insertcontrol();
		$test = $this->Image($data['image']);
		$a['image'] = $test;
		$a['created_at'] =Carbon::now('Asia/Kathmandu');
		$replace = array_replace($data,$a);
		DB::table('abouts')->Insert($replace);

		Session::flash('success');
		return redirect('/cd-admin/view-all-about');
	}

	public function update(){
		$data = $this-> updatevalidation();

		$test = DB::table('abouts')->get()->first();
		if(isset($data['image'])){
			if (file_exists('uploads/'.$test->image)) 
			{
				unlink('uploads/'.$test->image);
			}


			$test = $this->Image($data['image']);
			$a['image'] = $test ;
		}
		$a['updated_at'] =Carbon::now('Asia/Kathmandu');
		$replace = array_replace($data,$a);
		$data = DB::table('abouts')->update($replace);

		Session::flash('success1');
		return redirect('/cd-admin/view-all-about');
	}

	public function insertcontrol()
	{
		$request =Request()->all();
		$data =  Request()->validate([
			'greetings'=>'required',   
			'greetings_japanese'=>'required',
			'altimage' => 'required',
			'image' => 'required|image',
			'hibikus_policy' => 'required',
			'hibikus_policy_japanese' => 'required',
			
		]);
		return $data;
	}
	public function updatevalidation()
	{
		$request =Request()->all();
		$data =  Request()->validate([
			'greetings'=>'required',   
			'greetings_japanese'=>'required',
			'altimage' => 'required',
			'image' => 'image',
			'hibikus_policy' => 'required',
			'hibikus_policy_japanese' => 'required',
		]);
		return $data;
	}







}

?>