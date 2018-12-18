<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DichVu;
use File;
class DichVuController extends Controller
{
    public function getDichVu(){
    	$data['dich_vu'] = DichVu::orderBy('id','desc')->get();
    	return view('admin.dichvu.quanlydichvu',$data);
    }
    public function getThemDichVu(){
    	return view('admin.dichvu.themdichvu');
    }

    public function postThemDichVu(Request $rq){
    	$dich_vu = new DichVu;
    	$dich_vu->tieu_de = $rq->tieu_de;
    	$dich_vu->loi_dan = $rq->loi_dan;
    	if($rq->noi_dung== null){
            $dich_vu->noi_dung = "chưa có nội dung!";
        }
        else{
            $dich_vu->noi_dung = $rq->noi_dung;
        }
        
    	$dich_vu->slug = str_slug($rq->tieu_de);

    	if($rq->anh == ''){
			$filename = '29541772703_6ed8b50c47_b.jpg';
		}
		else{
			$filename = $rq->anh->getClientOriginalName();
			$path = "public/images";
			$filename = time().$filename;
			$rq->anh->storeAs($path,$filename);
		}          
		$dich_vu->anh = $filename;

    	$dich_vu->save();

    	return redirect('quanlydichvu');
    }
    public function getSuaDichVu($id){
    	$data['dich_vu'] = DichVu::where('id',$id)->first();
    	return view('admin.dichvu.suadichvu',$data);
    }

    public function postSuaDichVu($id,Request $rq){
    	$dich_vu = DichVu::find($id);
    	$dich_vu->tieu_de = $rq->tieu_de;
    	$dich_vu->loi_dan = $rq->loi_dan;
    	if($rq->noi_dung== null){
            $dich_vu->noi_dung = "chưa có nội dung!";
        }
        else{
            $dich_vu->noi_dung = $rq->noi_dung;
        }
    	$dich_vu->slug = str_slug($rq->tieu_de);


    	if(isset($rq->anh)){
			$filename = $rq->anh->getClientOriginalName();
			$path = "public/images";
			$filename = time().$filename;
			$rq->anh->storeAs($path,$filename);   
			File::delete('local/storage/app/public/images/'.$dich_vu->anh);    
			$dich_vu->anh = $filename;  
		}
		$dich_vu->save();
		return redirect('quanlydichvu');
    }
    public function getXoaDichVu($id){
        $dich_vu = DichVu::find($id);
        File::delete('local/storage/app/public/images/'.$dich_vu->anh); 
        DichVu::destroy($id);
        return back();   
    }
}
