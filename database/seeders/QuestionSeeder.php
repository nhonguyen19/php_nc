<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::where('name', 'Khoa học')->first()->questions()->createMany(
            [
                [
                    'category'=>'Khoa học',
                    'question'=>'Khi phải dùng thuốc, đặc biệt là thuốc kháng sinh cần chú ý điều gì?',
                    'correct_answer'=>'Tất cả các ý trên',
                    'incorrect_answer'=> '[Tuân theo sự chỉ định của bác sĩ, Phải biết tất cả những rủi ro có thể xảy ra khi dùng thuốc đó,Phải ngưng dùng thuốc nếu thấy bệnh không giảm hoặc bị dị ứng...]',
                ]
            ]
        );
    }
}
