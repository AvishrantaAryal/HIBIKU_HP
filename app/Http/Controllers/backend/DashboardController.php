<?php

namespace App\Http\Controllers\backend;

use Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Mail\QuickMail;
use App\News;
class DashboardController extends Controller
{

	 public function logout(){
        Auth::logout();
        return redirect()->back();
    }
    public function home(){
        $ne = News::where('status','active')->get()->all();
        $news = count($ne);
    	      $user=DB::table('users')->orderBy('id','DESC')->get()->first();  
    	 $mail = DB::table('dmails')->orderBy('id','Desc')->get()->take(5);
    	return view('cd-admin.home.home',compact('user','mail','news'));
    }

     public function quickmail(){
   $data = Request()->validate([
    		'email' => 'required|email',
    		'subject'=>'required',
    		'message' => 'required'
    	]);

        $a = [];
        $a['created_at'] = Carbon::now('Asia/Kathmandu');
        $final = array_merge($a,$data);
        DB::table('dmails')->insert($final);
        Mail::to($data['email'])->send(new QuickMail($data));
        Session::flash('success');
	return redirect('/cd-admin/dashboard');
    }

     public function view(){
    	$t =	DB::table('dmails')->orderBy('id', 'DESC')->paginate(10);
    	return view('cd-admin.home.mails',compact('t'));
    }

    
    public function del($id){
    	 DB::table('dmails')->where('id',$id)->delete();
        Session::flash('deletesuccess');
        return redirect('view-all-mails');
    }
}
