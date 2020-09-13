<?php
namespace App\Traits;

use App\Gallery;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SlugController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait gallerytrait
{
	use ImageController;
    use SlugController;

    public function add(){
      return view('cd-admin.gallery.addgallery');
  }

  public function addimage($id){
    $g = Gallery::where('id',$id)->get()->first();

    return view('cd-admin.gallery.addimage',compact('g'));
}

public function view(){
    $carousel = Gallery::all();

    return view('cd-admin.gallery.viewalbum',compact('carousel'));
}

public function image($album_id)
{

    $ga=DB::table('galleries')->get();
    $im=DB::table('images')->where('gallery_id',$album_id)->get();
    return view('cd-admin.gallery.imageview',compact('im','album_id','ga'));

}

public function store(){
    $FinalData=[];
    $data = $this->validate_album();
    $image = $data['image'];
    $file= $image;
    $filename = time().$file->getClientOriginalName();
    $destination = "uploads";
    $file->move($destination,$filename);
    $FinalData['image'] = $filename;
    $slug = $this->slug($data['name']);
    $FinalData['slug'] =$slug; 
    $merge = array_merge($data,$FinalData);
    DB::table('galleries')->Insert($merge);
    Session::flash('success');
    return redirect('/album-view');

}


public function storeimage($id){
    $FinalData=[];
    $data=$this->validate_image();
    $images = $data['image'];
    foreach ($images as $img) {

        $file = $img;
        $filename = time().$file->getClientOriginalName();
        $destination = "uploads/images";
        $file->move($destination,$filename);
        $b['image'] = $filename;
        $b['gallery_id']= $data['gallery_id'];
        
        $b['created_at'] =Carbon::now('Asia/Kathmandu');
        $replace = array_replace($data,$b);
        DB::table('images')->Insert($replace);
    }
    Session::flash('success');
    return redirect('/image-view/'.$id);


}

public function deletealbum($id){
    DB::beginTransaction();
    try{
        $ga = DB::table('galleries')->where('id',$id)->get()->first();
        if(file_exists('uploads/'.$ga->image)) 
        {
            unlink('uploads/'.$ga->image);
        }

        $img =DB::table('images')->where('gallery_id',$id)->get();
        foreach ($img as $i) {
         if(file_exists('uploads/images/'.$i->image)) 
         {
            unlink('uploads/images/'.$i->image);
            $img =DB::table('images')->where('gallery_id',$id)->delete();
        }
    }
    DB::table('galleries')->where('id',$id)->delete();
    DB::commit();
    Session::flash('deletesuccess');
    return redirect('/album-view');
}
catch(\Exception $e){
    DB::rollback();

}
}

public function deleteimage($id){
    $g = DB::table('images')->where('id',$id)->get()->first();
    if(file_exists('uploads/images/'.$g->image)) 
    {
        unlink('uploads/images/'.$g->image);
    }
    DB::table('images')->where('id',$id)->delete();
    Session::flash('deletesuccess');
    return redirect('/album-view');
}

public function status($id)
{
  $a = [];
  $test = DB::table('galleries')->where('id',$id)->get()->first();
  if($test->status=='active')
  {
    $a['status'] = 'inactive';
}
else
{
    $a['status'] = 'active'; 
}
DB::table('galleries')->where('id',$id)->update($a);
return redirect('/album-view');
}



public function validate_album()
{
    $request = Request()->all();
    $valid = $this->validate(Request(),[
        'name'=>'required',
        'name_japanese'=>'required',
        'image' => 'required|mimes:jpeg,jpg,png,gif',
        'altimage' => 'required',
        'status' => 'required'
    ]);
    return $valid;
}


public function validate_image()
{
    $request = Request()->all();
    $valid = $this->validate(Request(),[
        
        'image' => 'required',
        'gallery_id'=>'required',
        
    ]);
    return $valid;
}

}
?>  