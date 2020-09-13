<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Seo;
class SeoController extends Controller
{
    public function add(){
    	return view('cd-admin.seo.addseo');
    }
    public function view(){
    	$seo=DB::table('seos')->get();
        $er = Seo::all();
    	return view('cd-admin.seo.viewseo',compact('seo','er'));
    }
    public function store(Seo $s){
    	$test = $s->validationinsert();
  		$s->store($test);
        return redirect('/seo-view');

    }
    public function edit($id)
    {
    $ser = Seo::where('id',$id)->get()->first();
     return view('cd-admin.seo.editseo',compact('ser'));
    
    }

    public function updateseo(Seo $p,$id)
     {
        $data = $p->validationupdate();
    
        $p->updateseo($data,$id);
        return redirect('/seo-view');

    }
    public function delete($id,Seo $p)
    {
    $p->remove($id);
    return redirect('/seo-view');
    }
}
