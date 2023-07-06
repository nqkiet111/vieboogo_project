<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Danhmucdiadiem;
use Illuminate\Http\Request;

class DanhmucdiadiemController extends Controller
{
    //
    public function index(){
        $data_dmdd = Danhmucdiadiem::all();
        $manage_dmdd = view('Admin.Danhmucdiadiem.Danhmucdiadiem')->with('data_dmdd',$data_dmdd);
        return view('Layouts.master')->with('manage_dmdd',$manage_dmdd);
    }
}
