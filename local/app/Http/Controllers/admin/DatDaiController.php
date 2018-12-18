<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DatDai;
use File;

class DatDaiController extends Controller
{
    public function getDatDai(){
    	$data['dat_dai'] = DatDai::orderBy('id','desc')->get();
    	return view('admin.datdai.quanlydatdai',$data);
    }
    public function getThemDatDai(){
    	return view('admin.datdai.themdatdai');
    }

    public function postThemDatDai(Request $rq){
    	$dat_dai = new DatDai;
    	$dat_dai->tieu_de = $rq->tieu_de;
    	$dat_dai->loi_dan = $rq->loi_dan;
    	$dat_dai->type = $rq->type;
    	if($rq->noi_dung== null){
            $dat_dai->noi_dung = "chưa có nội dung!";
        }
        else{
            $dat_dai->noi_dung = $rq->noi_dung;
        }

        $dat_dai->slug = str_slug($rq->tieu_de);

        if($rq->anh == ''){
           $filename = '29541772703_6ed8b50c47_b.jpg';
       }
       else{
           $filename = $rq->anh->getClientOriginalName();
           $path = "public/images";
           $filename = time().$filename;
           $rq->anh->storeAs($path,$filename);
       }          
       $dat_dai->anh = $filename;

       $dat_dai->save();

       return redirect('quanlydatdai');
   }
   public function getSuaDatDai($id){
     $data['dat_dai'] = DatDai::where('id',$id)->first();
     return view('admin.datdai.suadatdai',$data);
 }

 public function postSuaDatDai($id,Request $rq){
     $dat_dai = DatDai::find($id);
     $dat_dai->tieu_de = $rq->tieu_de;
     $dat_dai->loi_dan = $rq->loi_dan;
     if($rq->noi_dung== null){
        $dat_dai->noi_dung = "chưa có nội dung!";
    }
    else{
        $dat_dai->noi_dung = $rq->noi_dung;
    }
    $dat_dai->type = $rq->type;
    $dat_dai->slug = str_slug($rq->tieu_de);


    if(isset($rq->anh)){
       $filename = $rq->anh->getClientOriginalName();
       $path = "public/images";
       $filename = time().$filename;
       $rq->anh->storeAs($path,$filename);   
       File::delete('local/storage/app/public/images/'.$dat_dai->anh);    
       $dat_dai->anh = $filename;  
   }
   $dat_dai->save();
   return redirect('quanlydatdai');
}
public function getXoaDatDai($id){
    $dat_dai = DatDai::find($id);
    File::delete('local/storage/app/public/images/'.$dat_dai->anh); 
    DatDai::destroy($id);
    return back();   
}
}
