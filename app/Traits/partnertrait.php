<?php
namespace App\Traits;

use Carbon\Carbon;

use Illuminate\Http\Request; 
use App\Partner;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

trait partnertrait{


	public function addPartner(){
		
		return view('cd-admin.partners.add-new-partner');
	}

	
	public function view(){
		$partner = Partner::orderby('id','DESC')->get()->all();
		return view('cd-admin.partners.view-all-partner',compact('partner'));
	}


	public function store(){
		$a=[];
		$data = $this->insertpartner();
			$p = $data['partner'];
				$pj = $data['partner_japanese'];
		$test = Input::get('partner');
			for($i = 0;$i<count($test);$i++) {
			$partner = new Partner();
			$partner->location = $data['location'];
			$partner->location_japanese = $data['location_japanese'];
			$partner->type = $data['type'];
			$partner->type_japanese = $data['type_japanese'];
			$partner->partner = $p[$i];
			$partner->partner_japanese = $pj[$i];
			$partner->save();
	}
		Session::flash('success');
		return redirect('/cd-admin/view-partner');

	}

	public function editPartner($id){
		$partner = Partner::where('id',$id)->get()->first();
		return view('cd-admin.partners.edit-partner',compact('partner'));
	}

	public function updatePartner($id){
		$FinalData = [];
		$request = Request()->all();
		$blog = Partner::where('id',$id)->get()->first();
		$data = $this->updatevalidation();
				$merge = array_merge($data,$FinalData);
				DB::table('partners')->where('id',$id)->update($merge);
				Session::flash('updatesuccess');
				return redirect()->to('cd-admin/view-partner');
		
	}

	public function deletePartner($id){
		$partner = Partner::where('id',$id)->get()->first();
		$partner->delete();
		Session::flash('deletesuccess');
				return redirect()->to('cd-admin/view-partner');
		

	}


	public function insertpartner()
	{
		$request =Request()->all();
		$data =  Request()->validate([
			'type'=>'',
			'type_japanese'=>'',
			'location'=>'',
			'location_japanese'=>'',   
			'partner'=>'',
			'partner_japanese'=>'',
			
		]);
		return $data;
	}
	public function updatevalidation()
	{
		$request =Request()->all();
		$data =  Request()->validate([
			'type'=>'',
			'type_japanese'=>'',
			'location'=>'',
			'location_japanese'=>'',   
			'partner'=>'',
			'partner_japanese'=>'',
		]);
		return $data;
	}






}

?>