<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NccController extends Controller
{
    public function index()
    {
        return view('Admin.Nhacungcap.Ncc');
    }
}
