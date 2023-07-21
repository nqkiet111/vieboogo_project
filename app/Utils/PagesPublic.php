<?php

namespace App\Utils;

use App\Models\Pages;

class PagesPublic
{
    public static function Pages()
    {
        $pages = Pages::orderBy('sort', 'asc')->get()->where('hidden', true);
        // $pages = Pages::where('page_id', 1)->first();
        // dd($pages);
        return $pages;
    }
}
