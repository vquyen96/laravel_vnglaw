<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TinTuc;
use App\Models\LoaiTin;
use File;

class TinTucController extends Controller
{
    public function getTinTuc(){
    	$data['tin_tuc'] = TinTuc::orderBy('id_tt','desc')->paginate(9);
    	return view('admin.tintuc.quanlytintuc',$data);
    }
    public function getThemTinTuc(){
    	$data['loai_tin'] = LoaiTin::get();
    	return view('admin.tintuc.themtintuc',$data);
    }
    public function postThemTinTuc(Request $rq){
    	$tin_tuc = new TinTuc;
    	$tin_tuc->tieu_de = $rq->tieu_de;
    	$tin_tuc->id_lt = $rq->id_lt;
    	$tin_tuc->loi_dan = $rq->loi_dan;
        if($rq->noi_dung== null){
            $tin_tuc->noi_dung = "chưa có nội dung!";
        }
        else{
            $tin_tuc->noi_dung = $rq->noi_dung;
        }
    	
    	$tin_tuc->slug = str_slug($rq->tieu_de);

    	if($rq->anh == ''){
			$filename = '29541772703_6ed8b50c47_b.jpg';
		}
		else{
			$filename = $rq->anh->getClientOriginalName();
			$path = "public/images";
			$filename = time().$filename;
			$rq->anh->storeAs($path,$filename);
		}          
		$tin_tuc->anh = $filename;

    	$tin_tuc->save();

    	return redirect('quanlytintuc');
    }

    public function getChiTietTinTuc($id){
    	$data['tin_tuc'] = TinTuc::where('id_tt',$id)->first();
    	$data['loai_tin'] = LoaiTin::get();
    	return view('admin.tintuc.chitiettintuc',$data);
    }

    public function getSuaTinTuc($id,Request $rq){
    	$tin_tuc = TinTuc::find($id);
    	$tin_tuc->tieu_de = $rq->tieu_de;
    	$tin_tuc->id_lt = $rq->id_lt;
    	$tin_tuc->loi_dan = $rq->loi_dan;
    	if($rq->noi_dung== null){
            $tin_tuc->noi_dung = "chưa có nội dung!";
        }
        else{
            $tin_tuc->noi_dung = $rq->noi_dung;
        }
    	$tin_tuc->slug = str_slug($rq->tieu_de);

    	if(isset($rq->anh)){
			$filename = $rq->anh->getClientOriginalName();
			$path = "public/images";
			$filename = time().$filename;
			$rq->anh->storeAs($path,$filename);   
			File::delete('local/storage/app/public/images/'.$tin_tuc->anh);    
			$tin_tuc->anh = $filename;  
		}
		$tin_tuc->save();
		return redirect('quanlytintuc');
    }

    public function getXoaTinTuc($id){
        $tin_tuc = TinTuc::find($id);
        File::delete('local/storage/app/public/images/'.$tin_tuc->anh); 
        TinTuc::destroy($id);
        return back();   
    }
}
