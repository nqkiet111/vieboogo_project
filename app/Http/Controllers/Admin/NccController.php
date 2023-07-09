<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ncc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Brian2694\Toastr\Facades\Toastr;
use App\Utils\CodeGenerator;
use Illuminate\Support\Facades\Storage;

class NccController extends Controller
{
    public function index()
    {
        $data_ncc = Ncc::where('status', 0)->get();
        // dd($data_ncc);
        $manage_ncc = view('Admin.Nhacungcap.Ncc')->with('data_ncc', $data_ncc);
        return view('Layouts.master')->with('manage_ncc', $manage_ncc);
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
                'ncc_ten.required' => 'Vui lòng nhập tên công ty',
                'ncc_email.required' => 'Vui lòng nhập email',
                'ncc_sodt.required' => 'Vui lòng nhập số điện thoại',
                'ncc_ngayhoatdong.required' => 'Vui lòng nhập ngày hoạt động',
                'ncc_makinhdoanh.required' => 'Vui lòng nhập mã kinh doanh',
                'ncc_chusohuu.required' => 'Vui lòng nhập chủ sở hữu',
                'ncc_tentknh1.required' => 'Vui lòng nhập tên ngân hàng 1',
                'ncc_tentknh2.required' => 'Vui lòng nhập tên ngân hàng 2',
                'ncc_sotknh1.required' => 'Vui lòng nhập số tài khoản ngân hàng 1',
                'ncc_sotknh2.required' => 'Vui lòng nhập số tài khoản ngân hàng 2',
                'ncc_logo.required' => 'Vui lòng chọn logo công ty',
                'ncc_diachi.required' => 'Vui lòng nhập địa chỉ',
            ]
        );
        //upload image
        $uploadedImage = $request->file('ncc_logo');
        $imagePath = $uploadedImage->store('uploads', 'public');
        //mã tự tăng
        $code_ncc = CodeGenerator::generateCode('NCC', 'nhacungcap', 'ncc_id', 'ma_ncc');
        $ncc = Ncc::create([
            'ma_ncc' => $code_ncc,
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
            'ncc_logo' => $imagePath,
            'ncc_diachi' => $request->input('ncc_diachi'),
        ]);
        $tb = Toastr::success('Thêm nhà cung cấp thành công', 'Thành công');
        $html = Redirect::to('/admin/nhacungcap')->with('tb', $tb);
        return response()->json(['success' => true, 'html' => $html]);
    }
    public function update(Request $request)
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
                'ncc_diachi' => 'required',
            ],
            [
                'ncc_ten.required' => 'Vui lòng nhập tên công ty',
                'ncc_email.required' => 'Vui lòng nhập email',
                'ncc_sodt.required' => 'Vui lòng nhập số điện thoại',
                'ncc_ngayhoatdong.required' => 'Vui lòng nhập ngày hoạt động',
                'ncc_makinhdoanh.required' => 'Vui lòng nhập mã kinh doanh',
                'ncc_chusohuu.required' => 'Vui lòng nhập chủ sở hữu',
                'ncc_tentknh1.required' => 'Vui lòng nhập tên ngân hàng 1',
                'ncc_tentknh2.required' => 'Vui lòng nhập tên ngân hàng 2',
                'ncc_sotknh1.required' => 'Vui lòng nhập số tài khoản ngân hàng 1',
                'ncc_sotknh2.required' => 'Vui lòng nhập số tài khoản ngân hàng 2',
                'ncc_diachi.required' => 'Vui lòng nhập địa chỉ',
            ]
        );

        // Tìm nhà cung cấp cần sửa
        $ma_ncc = $request->input('ma_ncc');
        $ncc = Ncc::where('ma_ncc', $ma_ncc)->first();

        if (!$ncc) {
            return response()->json(['success' => false, 'message' => 'Không tìm thấy nhà cung cấp']);
        }

        // Cập nhật thông tin
        $ncc->ncc_ten = $request->input('ncc_ten');
        $ncc->ncc_email = $request->input('ncc_email');
        $ncc->ncc_sodt = $request->input('ncc_sodt');
        $ncc->ncc_ngayhoatdong = $request->input('ncc_ngayhoatdong');
        $ncc->ncc_makinhdoanh = $request->input('ncc_makinhdoanh');
        $ncc->ncc_chusohuu = $request->input('ncc_chusohuu');
        $ncc->ncc_tentknh1 = $request->input('ncc_tentknh1');
        $ncc->ncc_sotknh1 = $request->input('ncc_sotknh1');
        $ncc->ncc_tentknh2 = $request->input('ncc_tentknh2');
        $ncc->ncc_sotknh2 = $request->input('ncc_sotknh2');
        $ncc->ncc_diachi = $request->input('ncc_diachi');

        // Kiểm tra xem có hình ảnh mới được tải lên hay không
        if ($request->hasFile('ncc_logo')) {
            // Xóa hình ảnh cũ
            if ($ncc->ncc_logo) {
                Storage::disk('public')->delete($ncc->ncc_logo);
            }

            // Tải lên hình ảnh mới
            $uploadedImage = $request->file('ncc_logo');
            $imagePath = $uploadedImage->store('uploads', 'public');
            $ncc->ncc_logo = $imagePath;
        }

        // Lưu thay đổi
        $ncc->save();

        $tb = Toastr::success('Cập nhật thông tin nhà cung cấp thành công', 'Thành công');
        $html = Redirect::to('/admin/nhacungcap')->with('tb', $tb);
        return response()->json(['success' => true, 'html' => $html]);
    }

    public function delete($ma_ncc)
    {
        $del = Ncc::where('ma_ncc', $ma_ncc)->update(['status' => 1]);
        Toastr::success('Xóa nhà cung cấp thành công!!!', 'Thành công');
        return redirect()->route('ncc.index');
    }
}
