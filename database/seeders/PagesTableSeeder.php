<?php

namespace Database\Seeders;

use App\Models\Pages;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nhanvien')->insert([
            //comment
            [
                'parent' => '',
                'display' => '',
                'title' => '',
                'symbol' => 'j',
                'controller' => '',
                'hidden' => '',
                'sort' => '',
                'remember_token' => '',                      
                'created_at' => ' ' ,
                'updated_at' => '',
            ],
            //comment
            [
                'parent' => '',
                'display' => '',
                'title' => '',
                'symbol' => '',
                'controller' => '',
                'hidden' => '',
                'sort' => '',
                'remember_token' => '',
                'created_at' => ' ',
                'updated_at' => '',
            ],
            //comment
            [
                'parent' => '',
                'display' => '',
                'title' => '',
                'symbol' => 'j',
                'controller' => '',
                'hidden' => '',
                'sort' => '',
                'remember_token' => '',
                'created_at' => ' ',
                'updated_at' => '',
            ],
        ]);
    }
}
