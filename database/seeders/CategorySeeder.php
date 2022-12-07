<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create( ['name'=>'Khoa học']);
        Category::create( ['name'=>'Lịch sử']);
        Category::create( ['name'=>'Địa lí']);
        Category::create( ['name'=>'Văn hoá']);
        Category::create( ['name'=>'Thể Thao']);
    }
}
