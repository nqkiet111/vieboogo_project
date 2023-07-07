<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Danhmucdiadiem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuanlytourCotroller extends Controller
{
    public function index(){
        $data_dmdd = Danhmucdiadiem::all();
        return view('Admin.Quanlytour.danhmucdiadiem')->with('data_dmdd',$data_dmdd);
    }

    public function AddDiadiem(Request $request){

        $diadiem = new Danhmucdiadiem();
        $diadiem->dmdd_ten = $request->tendiadiem;
        $check_tendiadiem = DB::table('danhmucdiadiem')->where('dmdd_ten', $request->tendiadiem)->count();
        if($check_tendiadiem > 0){
            return response()->json(['data' => 'error'], 200);
        }else{
            $diadiem->save();
            return response()->json(['data' => 'success'], 200);
        }
    }
}
