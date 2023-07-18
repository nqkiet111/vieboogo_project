<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NhanVien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Brian2694\Toastr\Facades\Toastr;
use App\Utils\CodeGenerator;
use Illuminate\Support\Facades\Storage;

class NhanVienController extends Controller
{
    public function index()
    {
        $list_nv = NhanVien::where('isAdmin', false)->get();
        dd($list_nv);
        $manage_nhanvien = view('Admin.QLNhanVien.NhanVien')->with('list_nv', $list_nv);
        return view('Layouts.master')->with('manage_nhanvien', $manage_nhanvien);
    }
}
