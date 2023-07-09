<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Danhmucdiadiem extends Model
{
    use HasFactory;
    protected $table = 'danhmucdiadiem';
    protected $primaryKey = 'dmdd_id';
    protected $fillable = [
        'dmdd_id',
        'dmdd_ten'
    ];
}
