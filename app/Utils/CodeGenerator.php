<?php

namespace App\Utils;

use Carbon\Carbon;
use Illuminate\Support\Facades\App;

class CodeGenerator
{
    public static function generateCode($prefix, $modelName, $idColumnName, $codeColumnName)
    {
        // Lấy ngày hiện tại
        $currentDate = Carbon::now();

        // Giải quyết tên model thành đối tượng model
        $model = App::make($modelName);

        // Lấy số cuối cùng trong cơ sở dữ liệu
        $lastNumber = $model::orderBy($idColumnName, 'desc')->value($codeColumnName);

        // Kiểm tra số cuối cùng
        if ($lastNumber) {
            // Tách phần số từ mã hiện tại (Ví dụ: NCC0001/10/05/2023 -> 0001)
            $lastNumber = explode('/', $lastNumber)[0];

            // Tăng số cuối cùng lên 1
            $newNumber = str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
        } else {
            // Nếu không có số cuối cùng, bắt đầu từ 0001
            $newNumber = '0001';
        }

        // Tạo mã ngẫu nhiên theo định dạng {prefix}xxxx/dd/mm/yyyy
        $code = $prefix . $newNumber . '/' . $currentDate->format('d/m/Y');

        return $code;
    }
}
