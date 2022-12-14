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
        Category::create( ['name'=>'Khoa học', 'status'=>'1']);
        Category::create( ['name'=>'Lịch sử','status'=>'1']);
        Category::create( ['name'=>'Địa lí','status'=>'1']);
        Category::create( ['name'=>'Văn hoá','status'=>'1']);
        Category::create( ['name'=>'Thể Thao','status'=>'1']);
    }
}
