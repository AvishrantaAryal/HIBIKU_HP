<?php
namespace App\Traits;
use Carbon\Carbon;
use App\Service;
use Illuminate\Http\Request; 
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SlugController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
trait servicetrait{
	use ImageController;
	use SlugController;


	public function addService(){
		return view('cd-admin.service.add-new-service');
	}

	public function insertService()
	{
		$FinalData = [];
		$request = Request()->all();
		$data = $this->validate_blog();
		$slug = $this->slug($data['title']);
		$image = $this->Image($data['image']);
		$FinalData['slug'] = $slug;
		$FinalData['image'] = $image;
		$merge = array_merge($data,$FinalData);
		DB::table('services')->insert($merge);
		Session::flash('success');
		return redirect()->to('cd-admin/view-all-service');
	}

	public function viewService()
	{
		$blog = Service::all();
		return view('cd-admin.service.view-all-service',compact('blog'));
	}

	public function editService($id)
	{
		if($check = Service::where('id',$id)->get()->first())
		{
			return view('cd-admin.service.edit-service',compact('check'));
		}
	}

	public function updateService($id)
	{
		$FinalData = [];
		$request = Request()->all();
		$blog = Service::where('id',$id)->get()->first();
		$data = $this->validate_update_blog();
		$slug = $this->slug($data['title']);
		if(Input::hasfile('image'))
		{
			if ($blog->image && file_exists("uploads/{$blog->image}")) {
				unlink("uploads/{$blog->image}");}
				if (file_exists("uploads/medium-{$blog->image}")) {
					unlink("uploads/medium-{$blog->image}");}

					$image = $this->Image($data['image']);
					$FinalData['image'] = $image;
				}
				$FinalData['slug'] = $slug;
				$merge = array_merge($data,$FinalData);
				DB::table('services')->where('id',$id)->update($merge);
				Session::flash('updatesuccess');
				return redirect()->to('cd-admin/view-all-service');
			}

			public function deleteService($id)
			{
				if($check = Service::where('id',$id)->get()->first())
				{
					if ($check->image && file_exists("uploads/{$check->image}")) {
						unlink("uploads/{$check->image}");}
						if (file_exists("uploads/medium-{$check->image}")) {
							unlink("uploads/medium-{$check->image}");}

							$check->delete();
							Session::flash('deletesuccess');
							return redirect()->to('cd-admin/view-all-service');
						}
					}


					public function updatestatus($id){

						$a = [];
						$test = DB::table('service')->where('id',$id)->get()->first();
						if($test->status=='active')
						{
							$a['status'] = 'inactive';
						}
						else
						{
							$a['status'] = 'active'; 
						}
						DB::table('service')->where('id',$id)->update($a);
						return redirect()->to('/cd-admin/view-all-service');
					}

					protected function validate_blog()
					{
						$request = Request()->all();
						$valid = $this->validate(Request(),[
							'title' => 'required',
							'title_japanese' => 'required',
							'image' => 'mimes:jpeg,jpg,png,gif',
							'altimage' => '',
							'description' => 'required',
							'summary' => 'required',
							'description_japanese' => 'required',
							'summary_japanese' => 'required',
							'seo_title' => 'required',
							'seo_keywords' => 'required',
							'seo_description' => 'required',
							'seo_title_japanese' => 'required',
							'seo_keywords_japanese' => 'required',
							'seo_description_japanese' => 'required',
							'status' => 'required'
						]);
						return $valid;
					}



					protected function validate_update_blog()
					{
						$request = Request()->all();
						$valid = $this->validate(Request(),[
							'title' => 'required',
							'title_japanese' => 'required',
							'image' => 'mimes:jpeg,jpg,png,gif',
							'altimage' => '',
							'description' => 'required',
							'summary' => 'required',
							'description_japanese' => 'required',
							'summary_japanese' => 'required',
							'seo_title' => 'required',
							'seo_keywords' => 'required',
							'seo_description' => 'required',
							'seo_title_japanese' => 'required',
							'seo_keywords_japanese' => 'required',
							'seo_description_japanese' => 'required',
							'status' => 'required'
						]);
						return $valid;
					}

				}

				?>	