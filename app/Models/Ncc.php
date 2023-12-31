<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ncc extends Model
{
    use HasFactory;
    protected $table = 'nhacungcap';
    protected $primaryKey = 'ncc_id';
    protected $fillable = [
        'ma_ncc',
        'ncc_logo',
        'ncc_ten',
        'ncc_diachi',
        'ncc_email',
        'ncc_sodt',
        'ncc_ngayhoatdong',
        'ncc_makinhdoanh',
        'ncc_chusohuu',
        'ncc_tentknh1',
        'ncc_sotknh1',
        'ncc_tentknh2',
        'ncc_sotknh2'
    ];

    public function Tour(){
        return $this->hasMany(Tour::class, 'tour_id');
    }
}
