<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Danhmucdiadiem;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
class QuanlytourCotroller extends Controller
{
    public function index(){
        $data_dmdd = Danhmucdiadiem::orderBy('created_at','desc')->paginate(5);
        return view('Admin.Quanlytour/danhmucdiadiem', compact('data_dmdd'))->with('i', (request()->input('page', 1) -1)*3);
    }

    public function AddDiadiem(Request $request){

        $diadiem = new Danhmucdiadiem();
        $diadiem->dmdd_ten = $request->tendiadiem;
        $check_tendiadiem = DB::table('danhmucdiadiem')->where('dmdd_ten', $request->tendiadiem)->count();
        if($check_tendiadiem > 0){
            return response()->json(['status' => 'error'], 200);
        }else{
            $diadiem->save();
            return response()->json(['status' => 'success'], 200);
        }
    }
    public function DestroyDmdiadiem($id){

        $todelete = DB::table('danhmucdiadiem')->where('dmdd_id', $id)->delete();
        if($todelete){
            return response()->json(['status' => true], 200);
        }else{
            return response()->json(['status' => false], 200);
        }
        
    }

    // CAP NHAT TOUR

    public function tourIndex(){
        $listTour = DB::table('tour')->get();
       return view('Admin.Quanlytour.capnhattour', compact('listTour'));
    }


    public function addTour(){
        $listDmdiadiem = Danhmucdiadiem::all();
        return view('Admin.Quanlytour.addTour', compact('listDmdiadiem'));
    }

    public function changTourHienthi(Request $request){

        
        if($request->Valhienthi == 1 || $request-> Valhienthi == 0){
            if($request->Valhienthi == 1){
                DB::table('tour')
              ->where('tour_id', $request->xx)
              ->update(['tour_hienthi' => 0]);
            }

            if($request->Valhienthi == 0){
                DB::table('tour')
              ->where('tour_id', $request->xx)
              ->update(['tour_hienthi' => 1]);
            }

        }else{
            return response()->json(['status' => false], 200);
        }
    }
    public function saveTour(Request $request){
        

            if($request->hasFile('anhTour')){
                $file = $request->file('anhTour');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' .$extension;
                $file->move('uploads/avtTours/', $filename);
                $tour = new Tour();
                $id = 'TOUR_' . (mt_rand() . time());
                $tour->tour_id = $id;
                // $tour->tour_idnv = '1';
                $tour->tour_iddmdd = $request->selectDiadiem;
                $tour->tour_anhtour = $filename;
                $tour->tour_ten = $request->txtTentour;
                $tour->tour_ngaydi = $request->txtNgaydi;
                $tour->tour_ngayve = $request->txtNgayve;
                $tour->tour_soluongngay = $request->txtSoluongngay;
                $tour->tour_soluongnguoilon = $request->slnguoilon;
                $tour->tour_soluongtrem = $request->sltreem;
                $tour->tour_mota = $request->mota;
                $tour->tour_hienthi = '1';
                $tour->tour_trangthai = '1';
                $tour->save();
                return response()->json(['status' => true], 200);
            }
            
    } 
    
}
