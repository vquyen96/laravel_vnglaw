<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Baner;
use File;
class BanerController extends Controller
{
    public function getBaner(){
        $data['baner'] = Baner::orderBy('id','desc')->get();
        return view('admin.doanhnghiep.baner.quanlybaner',$data);
    }
    public function getThemBaner(){
        return view('admin.doanhnghiep.baner.thembaner');
    }

    public function postThemBaner(Request $rq){
        $baner = new Baner;
        $baner->tieu_de = $rq->tieu_de;
        if($rq->anh == ''){
            $filename = '29541772703_6ed8b50c47_b.jpg';
        }
        else{
            $filename = $rq->anh->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->anh->storeAs($path,$filename);
        }          
        $baner->anh = $filename;
        $baner->save();
        return redirect('banerdoanhnghiep');
    }

    public function getSuaBaner($id){
        $data['baner'] = Baner::where('id',$id)->first();
        return view('admin.doanhnghiep.baner.suabaner',$data);
    }

    public function postSuaBaner($id,Request $rq){

        $baner = Baner::find($id);
        $baner->tieu_de = $rq->tieu_de;
   
        if(isset($rq->anh)){
            $filename = $rq->anh->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->anh->storeAs($path,$filename);   
            File::delete('local/storage/app/public/images/'.$baner->anh);    
            $baner->anh = $filename;  
        }
        $baner->save();
        return redirect('banerdoanhnghiep');
    }
    public function getXoaBaner($id){
        $baner = Baner::find($id);
        File::delete('local/storage/app/public/images/'.$baner->anh); 
        Baner::destroy($id);
        return back();   
    }

}
