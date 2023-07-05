<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ncc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Brian2694\Toastr\Facades\Toastr;
class NccController extends Controller
{
    public function index() 
    {
        $data_ncc = Ncc::all();
        $manage_ncc = view('Admin.Nhacungcap.Ncc')->with('data_ncc',$data_ncc);
        return view('Layouts.master')->with('manage_ncc',$manage_ncc);
    }

    public function save(Request $request)
    {
        request()->validate(
            [
                'ncc_ten' => 'required',
                'ncc_email' => 'required',
                'ncc_sodt' => 'required',
                'ncc_ngayhoatdong' => 'required',
                'ncc_makinhdoanh' => 'required',
                'ncc_chusohuu' => 'required',
                'ncc_tentknh1' => 'required',
                'ncc_tentknh2' => 'required',
                'ncc_sotknh1' => 'required',
                'ncc_sotknh2' => 'required',
                'ncc_logo' => 'required',
                'ncc_diachi' => 'required',
            ],
            [
                'ncc_ten.required' => 'Vui lòng nhập mã bộ môn',
                'ncc_email.required' => 'Vui lòng nhập tên bộ môn',
                'ncc_sodt.required' => 'Mã bộ môn đã tồn tại',
                'ncc_ngayhoatdong.required' => 'Mã bộ môn đã tồn tại',
                'ncc_makinhdoanh.required' => 'Mã bộ môn đã tồn tại',
                'ncc_chusohuu.required' => 'Mã bộ môn đã tồn tại',
                'ncc_tentknh1.required' => 'Mã bộ môn đã tồn tại',
                'ncc_tentknh2.required' => 'Mã bộ môn đã tồn tại',
                'ncc_sotknh1.required' => 'Mã bộ môn đã tồn tại',
                'ncc_sotknh2.required' => 'Mã bộ môn đã tồn tại',
                'ncc_logo.required' => 'Mã bộ môn đã tồn tại',
                'ncc_diachi.required' => 'Mã bộ môn đã tồn tại',
            ]
        );
        $ncc = Ncc::create([
            'ncc_ten' => $request->input('ncc_ten'),
            'ncc_email' => $request->input('ncc_email'),
            'ncc_sodt' => $request->input('ncc_sodt'),
            'ncc_ngayhoatdong' => $request->input('ncc_ngayhoatdong'),
            'ncc_makinhdoanh' => $request->input('ncc_makinhdoanh'),
            'ncc_chusohuu' => $request->input('ncc_chusohuu'),
            'ncc_tentknh1' => $request->input('ncc_tentknh1'),
            'ncc_sotknh1' => $request->input('ncc_sotknh1'),
            'ncc_tentknh2' => $request->input('ncc_tentknh2'),
            'ncc_sotknh2' => $request->input('ncc_sotknh2'),
            'ncc_logo' => $request->input('ncc_logo'),
            'ncc_diachi' => $request->input('ncc_diachi'),
        ]);
        $tb = Toastr::success('Thêm nhà cung cấp thành công', 'Thành công');
        $html = Redirect::to('/admin/nhacungcap')->with('tb', $tb);
        return response()->json(['success' => true, 'html' => $html]);
    }
}
