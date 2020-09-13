<?php

namespace App\Traits;
use Carbon\Carbon;
use App\Profile;
use Illuminate\Http\Request; 
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SlugController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

trait profiletrait{
	use ImageController;


	public function companyprofile(){
		return view('cd-admin.profile.add-company-profile');
	}

	public function store()
	{
		dd('here');
		$FinalData = [];
		$request = Request()->all();
		$data = $this->validate_profile();
		$image = $this->Image($data['image']);
		$FinalData['image'] = $image;
		$merge = array_merge($data,$FinalData);
		DB::table('profiles')->insert($merge);
		Session::flash('success');
		return redirect()->to('cd-admin/view-company-profile');
	}

	public function view()
	{
		$profile = Profile::get()->first();
		return view('cd-admin.profile.view-company-profile',compact('profile'));
	}

	public function edit()
	{
		$profile = Profile::get()->first();
		
			return view('cd-admin.profile.edit-company-profile',compact('profile'));
		
	}

	public function update()
	{
		$FinalData = [];
		$request = Request()->all();
		$blog = Profile::get()->first();
		$data = $this->validate_update_profile();
		if(Input::hasfile('image'))
		{
			if ($blog->image && file_exists("uploads/{$blog->image}")) {
				unlink("uploads/{$blog->image}");}
				if (file_exists("uploads/medium-{$blog->image}")) {
					unlink("uploads/medium-{$blog->image}");}

					$image = $this->Image($data['image']);
					$FinalData['image'] = $image;
				}
				
				$merge = array_merge($data,$FinalData);
				DB::table('profiles')->update($merge);
				Session::flash('updatesuccess');
				return redirect()->to('cd-admin/view-company-profile');
			}

			
					protected function validate_profile()
					{
						$request = Request()->all();
						$valid = $this->validate(Request(),[
							'image' => 'required|mimes:jpeg,jpg,png,gif',
							'altimage' => 'required',
							'introduction'=>'required',
							'introduction_japanese'=>'required',
							'ceo_introduction'=>'required',
							'ceo_introduction_japanese'=>'required',
							'outline'=>'required',
							'outline_japanese'=>'required',
							'location'=>'required',
							'location_japanese'=>'required',



						]);
						return $valid;
					}



					protected function validate_update_profile()
					{
						$request = Request()->all();
						$valid = $this->validate(Request(),[
							'image' => 'mimes:jpeg,jpg,png,gif',
							'altimage' => 'required',
							'introduction'=>'required',
							'introduction_japanese'=>'required',
							'ceo_introduction'=>'required',
							'ceo_introduction_japanese'=>'required',
							'outline'=>'required',
							'outline_japanese'=>'required',
							'location'=>'required',
							'location_japanese'=>'required',
						]);
						return $valid;					
					}

				}

				?>	