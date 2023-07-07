<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Danhmucdiadiem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    
}
