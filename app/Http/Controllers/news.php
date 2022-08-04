<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;
 use App\Models\tin;
class news extends Controller
{   
   
    public function tinmoi(){
        $query = DB::table('tin')
        ->select('id','tieuDe','ngayDang')
        ->orderBy('ngayDang','desc')
        ->limit(10);
        $data = $query->get();
        return view('user.tinmoi',['data' =>$data]);
    }
    public function lay10tin(){
     $query = DB::table('tin')
     ->select('id','tieuDe','ngayDang')
     ->orderBy('xem','desc')
     ->limit(10);
     $data = $query->get();
     
     return view('user.trangchu',['data' =>$data , 'danhmuc'=>DB::table('loaitin')->paginate(5)]);
    }
    // public function laydanhmuc(){
    //     $query = DB::table('loaitin')->select('ten','lang','id')->orderBy('id');
    //     $data =$query->get();
    //     return view('user.danhmuc',['data'=>$data]);
    // }
    public function laytintrongdm($id){
        return view('user.tintrongloai',[
            'data' =>DB::table('tin')->where('idLT',$id)->paginate(12) , 
            'danhmuc'=>DB::table('loaitin')->paginate(5)
        ]);
    }
    public function chitiettin($id){
        $data = DB::table('tin')->where('id',$id)->first();
        // $data = $query->get();
        return view('user.chitiet',['data'=>$data]);
    }
    public function them(){       
        $query = DB::table('loaitin')->select('id','ten')->orderBy('id');
        $data =$query->get(); 
        return view('user.them',['danhmuc'=>$data]);
    }
    public function xulyThem(){
        $value = new Tin;
        $value->tieuDe=$_POST['tieuDe'];
        $value->tomTat=$_POST['tomTat'];
        $value->urlHinh=$_POST['urlImg'];
        $value->noiDung=$_POST['noidung'];
        $value->idLT=$_POST['idLT'];
        $value->save();
       return redirect('tin/danhmuc/'.$value->idLT);
    }
    public function laydanhsach(){
        return "ok";
    }
    public function xoa($id){
        $handle = Tin::find($id);
        if($handle==null){
            return redirect()->route('error', ['code' => 404]);
        }else{
            $handle->delete();
            return redirect()->route('success');
        }
    }
    public function capnhat($id){
        $data = DB::table('tin')->where('id',$id)->first();
        $query = DB::table('loaitin')->select('id','ten')->orderBy('id');
        $danhmuc =$query->get(); 
        return view('user.capnhat',['data'=>$data,'danhmuc'=>$danhmuc]);
    }
    public function xulycapnhat($id){
        $handle = Tin::find($id);
        if($handle==null){
            return redirect()->route('error', ['code' => 404]);
        }else{
            $handle->tieuDe=$_POST['tieuDe'];
            $handle->tomTat=$_POST['tomTat'];
            $handle->urlHinh=$_POST['urlImg'];
            $handle->noiDung=$_POST['noidung'];
            $handle->idLT=$_POST['idLT'];
            $handle->save();
            return redirect()->route('success');
        }
    }
}
