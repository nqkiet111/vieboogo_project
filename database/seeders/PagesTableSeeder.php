<?php

namespace Database\Seeders;

use App\Models\Pages;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Pages::create([
            'parent' => 'john@example.com',
            'display' => bcrypt('password'),
            'title' => 'John Doe',
            'symbol' => 'john@example.com',
            'controller' => bcrypt('password'),
            'hidden' => 'John Doe',
            'sort' => 'john@example.com',
            'remember_token' => bcrypt('password'),
            'created_at' => bcrypt('password'),
            'updated_at' => 'John Doe',
        ]);
    }
}
