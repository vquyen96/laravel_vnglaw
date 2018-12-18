<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GiayPhep;
use File;


class GiayPhepController extends Controller
{
    public function getGiayPhep(){
    	$data['giay_phep'] = GiayPhep::orderBy('id','desc')->get();
    	return view('admin.giayphep.quanlygiayphep',$data);
    }
    public function getThemGiayPhep(){
    	return view('admin.giayphep.themgiayphep');
    }

    public function postThemGiayPhep(Request $rq){
    	$giay_phep = new GiayPhep;
    	$giay_phep->tieu_de = $rq->tieu_de;
    	$giay_phep->loi_dan = $rq->loi_dan;
    	$giay_phep->type = $rq->type;
    	if($rq->noi_dung== null){
            $giay_phep->noi_dung = "chưa có nội dung!";
        }
        else{
            $giay_phep->noi_dung = $rq->noi_dung;
        }
    	$giay_phep->slug = str_slug($rq->tieu_de);

    	if($rq->anh == ''){
			$filename = '29541772703_6ed8b50c47_b.jpg';
		}
		else{
			$filename = $rq->anh->getClientOriginalName();
			$path = "public/images";
			$filename = time().$filename;
			$rq->anh->storeAs($path,$filename);
		}          
		$giay_phep->anh = $filename;

    	$giay_phep->save();

    	return redirect('quanlygiayphep');
    }
    public function getSuaGiayPhep($id){
    	$data['giay_phep'] = GiayPhep::where('id',$id)->first();
    	return view('admin.giayphep.suagiayphep',$data);
    }

    public function postSuaGiayPhep($id,Request $rq){
    	$giay_phep = GiayPhep::find($id);
    	$giay_phep->tieu_de = $rq->tieu_de;
    	$giay_phep->loi_dan = $rq->loi_dan;
    	if($rq->noi_dung== null){
            $giay_phep->noi_dung = "chưa có nội dung!";
        }
        else{
            $giay_phep->noi_dung = $rq->noi_dung;
        }
    	$giay_phep->type = $rq->type;
    	$giay_phep->slug = str_slug($rq->tieu_de);


    	if(isset($rq->anh)){
			$filename = $rq->anh->getClientOriginalName();
			$path = "public/images";
			$filename = time().$filename;
			$rq->anh->storeAs($path,$filename);   
			File::delete('local/storage/app/public/images/'.$giay_phep->anh);    
			$giay_phep->anh = $filename;  
		}
		$giay_phep->save();
		return redirect('quanlygiayphep');
    }
    public function getXoaGiayPhep($id){
        $giay_phep = GiayPhep::find($id);
        File::delete('local/storage/app/public/images/'.$giay_phep->anh); 
        GiayPhep::destroy($id);
        return back();   
    }
}
