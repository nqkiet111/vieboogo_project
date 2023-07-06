<?php

namespace App\Utils;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CodeGenerator
{
    public static function generateCode($prefix, $tableName, $idColumnName, $codeColumnName)
    {
        // Lấy ngày hiện tại
        $currentDate = Carbon::now();
        $formattedDate = $currentDate->format('d-m-Y');

        // Lấy số cuối cùng trong cơ sở dữ liệu
        $lastCode = DB::table($tableName)->orderBy($idColumnName, 'desc')->value($codeColumnName);

        // Tách phần số từ mã hiện tại
        $lastNumber = intval(substr($lastCode, strlen($prefix)));

        // Tăng số cuối cùng lên 1
        $newNumber = $lastNumber + 1;

        // Kiểm tra giá trị mới nhất, nếu vượt quá 9999, thêm vào NCC10000
        if ($newNumber > 9999) {
            $newNumber = 10001;
        }
        // Tạo mã ngẫu nhiên theo định dạng {prefix}{number}-{date}
        $code = $prefix . str_pad($newNumber, 4, '0', STR_PAD_LEFT) . '-' . $formattedDate;

        return $code;
    }
}
