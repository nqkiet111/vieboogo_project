<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $table = 'tour';
    protected $primaryKey = 'tour_id';
    protected $fillable = [
        'tour_id',
        'tour_idnv',
        'tour_idncc',
        'tour_iddmdd',
        'tour_anhtour',
        'tour_ten',
        'tour_ngaydi',
        'tour_ngayve',
        'tour_soluongngay',
        'tour_soluongnguoilon',
        'tour_soluongtrem',
        'tour_mota',
        'tour_hienthi',
        'tour_trangthai'
    ];

    public function nhanvien(){
        return $this->belongsTo(NhanVien::class,Ncc::class ,'id_nv', 'id_ncc');
    }
}
