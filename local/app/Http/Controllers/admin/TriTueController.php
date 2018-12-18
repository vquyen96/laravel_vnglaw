<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TriTue;
use File;

class TriTueController extends Controller
{
    public function getTriTue(){
    	$data['tri_tue'] = TriTue::orderBy('id','desc')->get();
    	return view('admin.sohuutritue.quanlytritue',$data);
    }
    public function getThemTriTue(){
    	return view('admin.sohuutritue.themtritue');
    }

    public function postThemTriTue(Request $rq){
    	$tri_tue = new TriTue;
    	$tri_tue->tieu_de = $rq->tieu_de;
    	$tri_tue->loi_dan = $rq->loi_dan;
    	if($rq->noi_dung== null){
            $tri_tue->noi_dung = "chưa có nội dung!";
        }
        else{
            $tri_tue->noi_dung = $rq->noi_dung;
        }
    	$tri_tue->slug = str_slug($rq->tieu_de);

    	if($rq->anh == ''){
			$filename = '29541772703_6ed8b50c47_b.jpg';
		}
		else{
			$filename = $rq->anh->getClientOriginalName();
			$path = "public/images";
			$filename = time().$filename;
			$rq->anh->storeAs($path,$filename);
		}          
		$tri_tue->anh = $filename;

    	$tri_tue->save();

    	return redirect('quanlytritue');
    }
    public function getSuaTriTue($id){
    	$data['tri_tue'] = TriTue::where('id',$id)->first();
    	return view('admin.sohuutritue.suatritue',$data);
    }

    public function postSuaTriTue($id,Request $rq){
    	$tri_tue = TriTue::find($id);
    	$tri_tue->tieu_de = $rq->tieu_de;
    	$tri_tue->loi_dan = $rq->loi_dan;
    	if($rq->noi_dung== null){
            $tri_tue->noi_dung = "chưa có nội dung!";
        }
        else{
            $tri_tue->noi_dung = $rq->noi_dung;
        }
    	$tri_tue->slug = str_slug($rq->tieu_de);

    	if(isset($rq->anh)){
			$filename = $rq->anh->getClientOriginalName();
			$path = "public/images";
			$filename = time().$filename;
			$rq->anh->storeAs($path,$filename);   
			File::delete('local/storage/app/public/images/'.$tri_tue->anh);    
			$tri_tue->anh = $filename;  
		}
		$tri_tue->save();
		return redirect('quanlytritue');
    }
    public function getXoaTriTue($id){
        $tri_tue = TriTue::find($id);
        File::delete('local/storage/app/public/images/'.$tri_tue->anh); 
        TriTue::destroy($id);
        return back();   
    }
}
