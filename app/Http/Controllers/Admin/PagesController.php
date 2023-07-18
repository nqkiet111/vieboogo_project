<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Danhmucdiadiem;
use App\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index()
    {
        $pages= Pages::orderBy('sort', 'asc')->get()->where('hidden', true);
        // $pages = Pages::where('page_id', 1)->first();
        // dd($pages);
        return view('Layouts.master', ['pages' => $pages]);
    }
}
