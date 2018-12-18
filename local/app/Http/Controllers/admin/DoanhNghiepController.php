<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DoanhNghiep;
use File;

class DoanhNghiepController extends Controller
{


    public function getDoanhNghiep(){
    	$data['doanh_nghiep'] = DoanhNghiep::orderBy('id','desc')->get();
    	return view('admin.doanhnghiep.dichvukhac.quanly',$data);

    }
    public function getThemDoanhNghiep(){
    	return view('admin.doanhnghiep.dichvukhac.themlv');
    }
    public function postThemDoanhNghiep(Request $rq){
        $doanh_nghiep = new DoanhNghiep;
        $doanh_nghiep->tieu_de = $rq->tieu_de;
        $doanh_nghiep->loi_dan = $rq->loi_dan;
        if($rq->noi_dung== null){
            $doanh_nghiep->noi_dung = "chưa có nội dung!";
        }
        else{
            $doanh_nghiep->noi_dung = $rq->noi_dung;
        }
        $doanh_nghiep->type = $rq->type;
        $doanh_nghiep->slug = str_slug($rq->tieu_de);

        if($rq->anh == ''){
            $filename = '29541772703_6ed8b50c47_b.jpg';
        }
        else{
            $filename = $rq->anh->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->anh->storeAs($path,$filename);
        }          
        $doanh_nghiep->anh = $filename;

        $doanh_nghiep->save();

        return redirect('quanlydoanhnghiep');
    }
    public function getSuaDoanhNghiep($id){
        $data['doanh_nghiep'] = DoanhNghiep::where('id',$id)->first();
        return view('admin.doanhnghiep.dichvukhac.sualv',$data);
    }

    public function postSuaDoanhNghiep($id,Request $rq){
        $doanh_nghiep = DoanhNghiep::find($id);
        $doanh_nghiep->tieu_de = $rq->tieu_de;
        $doanh_nghiep->loi_dan = $rq->loi_dan;
        if($rq->noi_dung== null){
            $doanh_nghiep->noi_dung = "chưa có nội dung!";
        }
        else{
            $doanh_nghiep->noi_dung = $rq->noi_dung;
        }

        $doanh_nghiep->type = $rq->type;
        $doanh_nghiep->slug = str_slug($rq->tieu_de);


        if(isset($rq->anh)){
            $filename = $rq->anh->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->anh->storeAs($path,$filename);   
            File::delete('local/storage/app/public/images/'.$doanh_nghiep->anh);    
            $doanh_nghiep->anh = $filename;  
        }
        $doanh_nghiep->save();
        return redirect('quanlydoanhnghiep');
    }
    public function getXoaDoanhNghiep($id){
        $doanh_nghiep = DoanhNghiep::find($id);
        File::delete('local/storage/app/public/images/'.$doanh_nghiep->anh); 
        DoanhNghiep::destroy($id);
        return back();   
    }
}
