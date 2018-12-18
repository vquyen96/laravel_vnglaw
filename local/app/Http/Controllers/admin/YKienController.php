<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\YKien;
use File;

class YKienController extends Controller
{
	public function getYkien(){
		$data['y_kien'] = YKien::orderBy('id','desc')->get();
		return view('admin.ykienkhachhang.quanlyykien',$data); 
	}
	public function getThemYKien(){
		return view('admin.ykienkhachhang.themykien');
	}
	public function postThemYKien(Request $rq){
		$y_kien = new YKien;
		$y_kien->ten_kh = $rq->ten_kh;
		$y_kien->chuc_vu = $rq->chuc_vu;
		$y_kien->y_kien = $rq->y_kien;

		if($rq->anh == ''){
			$filename = '29541772703_6ed8b50c47_b.jpg';
		}
		else{
			$filename = $rq->anh->getClientOriginalName();
			$path = "public/images";
			$filename = time().$filename;
			$rq->anh->storeAs($path,$filename);
		}          
		$y_kien->anh = $filename;

		$y_kien->save();

		return redirect('ykienkhachhang');
	}
	public function getSuaYKien($id){
		$data['y_kien_cu'] = YKien::where('id',$id)->first();
		return view('admin.ykienkhachhang.suaykien',$data);
	}
	public function postSuaYKien(Request $rq,$id){
		$y_kien = YKien::find($id);
		$y_kien->ten_kh = $rq->ten_kh;
		$y_kien->chuc_vu = $rq->chuc_vu;
		$y_kien->y_kien = $rq->y_kien;

		if(isset($rq->anh)){
			$filename = $rq->anh->getClientOriginalName();
			$path = "public/images";
			$filename = time().$filename;
			$rq->anh->storeAs($path,$filename);   
			File::delete('local/storage/app/public/images/'.$y_kien->anh);    
			$y_kien->anh = $filename;  
		}

		$y_kien->save();

		return redirect('ykienkhachhang');
	}

	public function getXoaYKien($id){
		$y_kien = YKien::find($id);
		File::delete('local/storage/app/public/images/'.$y_kien->anh); 
		YKien::destroy($id);
		return back();   
	}
}
