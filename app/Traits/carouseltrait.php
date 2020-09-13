<?php
namespace App\Traits;

use Carbon\Carbon;
use App\Carousel;
use Illuminate\Http\Request; 
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;


trait carouseltrait{
	use ImageController;
	public function add(){
		return view('cd-admin.carousel.add-new-carousel');
	}


	public function store(){
		$FinalData = [];
		$request = Request()->all();
		$data = $this->validate_carousel();
		$image = $this->Image($data['image']);
		$FinalData['image'] = $image;
		$merge = array_merge($data,$FinalData);
		DB::table('carousels')->insert($merge);
		Session::flash('success');
		return redirect()->to('cd-admin/view-all-carousel');
	}

	public function view(){
		$carousel = Carousel::all();
		return view('cd-admin.carousel.view-all-carousel',compact('carousel'));
	}
	public function editcarousel($id)
	{
		if($check = Carousel::where('id',$id)->get()->first())
		{
			return view('cd-admin.carousel.edit-carousel',compact('check'));
		}
	}

	public function updatecarousel($id){
		$a = [];
		$test = DB::table('carousels')->where('id',$id)->get()->first();
		if($test->status=='active')
		{
			$a['status'] = 'inactive';
		}
		else
		{
			$a['status'] = 'active'; 
		}
		DB::table('carousels')->where('id',$id)->update($a);
		return redirect('/cd-admin/view-all-carousel');
	}

	public function deletecarousel($id){
		if($check = Carousel::where('id',$id)->get()->first())
		{
			if ($check->image && file_exists("uploads/{$check->image}")) {
				unlink("uploads/{$check->image}");}
				if (file_exists("uploads/medium-{$check->image}")) {
					unlink("uploads/medium-{$check->image}");}

					$check->delete();
					Session::flash('deletesuccess');
					return redirect()->to('cd-admin/view-all-carousel');
				}
				
			}




			public function validate_carousel()
			{
				$request = Request()->all();
				$valid = $this->validate(Request(),[
					'image' => 'required|mimes:jpeg,jpg,png,gif',
					'altimage' => 'required',
					'status' => 'required'
				]);
				return $valid;
			}

			public function validate_update_carousel()
			{
				$request = Request()->all();
				$valid = $this->validate(Request(),[
					'image' => 'mimes:jpeg,jpg,png,gif',
					'altimage' => 'required',
					'status' => 'required'
				]);
				return $valid;
			}

		}
		?>