<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use App\Models\LyDo;


class LyDoController extends Controller
{
    public function getLyDo(){
		$data['ly_do'] = LyDo::orderBy('id','desc')->get();
		return view('admin.lydo.quanly',$data); 
	}
	public function getThemLyDo(){
		return view('admin.lydo.themlydo');
	}
	public function postThemLyDo(Request $rq){
		$ly_do = new LyDo;
		$ly_do->tieu_de = $rq->tieu_de;
		$ly_do->noi_dung = $rq->noi_dung;

		if($rq->anh == ''){
			$filename = '29541772703_6ed8b50c47_b.jpg';
		}
		else{
			$filename = $rq->anh->getClientOriginalName();
			$path = "public/images";
			$filename = time().$filename;
			$rq->anh->storeAs($path,$filename);
		}          
		$ly_do->anh = $filename;

		$ly_do->save();

		return redirect('lydo');
	}
	public function getSuaLyDo($id){
		$data['ly_do'] = LyDo::where('id',$id)->first();
		return view('admin.lydo.sualydo',$data);
	}
	public function postSuaLyDo(Request $rq,$id){
		$ly_do = LyDo::find($id);
		$ly_do->tieu_de = $rq->tieu_de;
		$ly_do->noi_dung = $rq->noi_dung;

		if(isset($rq->anh)){
			$filename = $rq->anh->getClientOriginalName();
			$path = "public/images";
			$filename = time().$filename;
			$rq->anh->storeAs($path,$filename);   
			File::delete('local/storage/app/public/images/'.$ly_do->anh);    
			$ly_do->anh = $filename;  
		}

		$ly_do->save();

		return redirect('lydo');
	}

	public function getXoaLyDo($id){
		$ly_do = LyDo::find($id);
		File::delete('local/storage/app/public/images/'.$ly_do->anh); 
		LyDo::destroy($id);
		return back();   
	}
}
