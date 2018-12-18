<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DichVuDoanhNghiep;
use File;
class DichVuDoanhNghiepController extends Controller
{
    public function getDichVu(){
    	$data['dich_vu'] = DichVuDoanhNghiep::orderBy('id','desc')->get();
    	return view('admin.doanhnghiep.thanhlapdoanhnghiep.quanlydichvudn',$data);
    }
    public function getThemDichVu(){
    	return view('admin.doanhnghiep.thanhlapdoanhnghiep.themdichvudn');
    }

    public function postThemDichVu(Request $rq){
    	$dich_vu = new DichVuDoanhNghiep;
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

    	return redirect('dichvudoanhnghiep');
    }
    public function getSuaDichVu($id){
    	$data['dich_vu'] = DichVuDoanhNghiep::where('id',$id)->first();
    	return view('admin.doanhnghiep.thanhlapdoanhnghiep.suadichvudn',$data);
    }

    public function postSuaDichVu($id,Request $rq){
    	$dich_vu = DichVuDoanhNghiep::find($id);
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
		return redirect('dichvudoanhnghiep');
    }
    public function getXoaDichVu($id){
        $dich_vu = DichVuDoanhNghiep::find($id);
        File::delete('local/storage/app/public/images/'.$dich_vu->anh); 
        DichVuDoanhNghiep::destroy($id);
        return back();   
    }
}
