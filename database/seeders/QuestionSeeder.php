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
                    'a'=>'Tuân theo sự chỉ định của bác sĩ',
                    'b'=>'Phải biết tất cả những rủi ro có thể xảy ra khi dùng thuốc đó',
                    'c'=>'Phải ngưng dùng thuốc nếu thấy bệnh không giảm hoặc bị dị ứng...',
                    'd'=>'Tất cả các ý trên',
                    'correct_answer'=>'Tất cả các ý trên',
                    'status'=>'1',
                ],
                [
                    'category'=>'Lịch sử',
                    'question'=>'Tại sao gọi là "Trật tự 2 cực Ianta"?',
                    'a'=>' Liên Xô và Mĩ phân chia khu vực ảnh hưởng và phạm vi đóng quân ở châu Á và châu Âu.',
                    'b'=>'Mĩ và Liên Xô phân chia khu vực ảnh hưởng và đại diện cho 2 phe: đế quốc chủ nghĩa và xã hội chủ nghĩa.',
                    'c'=>'Thế giới đã xảy ra nhiều cuộc xung đột, căng thẳng.',
                    'd'=>'Tất cả đều đúng.',
                    'correct_answer'=>'Tất cả đều đúng.',
                    'status'=>'1',
                ],
                [
                    'category'=>'Địa lí',
                    'question'=>'Vùng biển tiếp liền với lãnh hải và hợp với lãnh hải một vùng biển rộng 200 hải lí tính từ đường cơ sở là',
                    'a'=>'Vùng tiếp giáp lãnh hải ',
                    'b'=>'Nội thủy',
                    'c'=>'Vùng đặc quyền về kinh tế',
                    'd'=>'Lãnh hải',
                    'correct_answer'=>'Vùng đặc quyền về kinh tế',
                    'status'=>'1',
                ],
                [
                    'category'=>'Văn hoá',
                    'question'=>' Yếu tố nào sau đây mang tính quốc tế?',
                    'a'=>' Văn hóa',
                    'b'=>'Văn hiến',
                    'c'=>'Văn minh',
                    'd'=>' Văn vật',
                    'correct_answer'=>'Văn minh',
                    'status'=>'1',
                ],
                [
                    'category'=>'Thể thao',
                    'question'=>'Cuộc đua ma ra tông kéo dài bao lâu?',
                    'a'=>'42.195 km',
                    'b'=>'43.195 km',
                    'c'=>'44.195 km',
                    'd'=>'45.195 km',
                    'correct_answer'=>'42.195 km',
                    'status'=>'1',
                ],
            ]
        );
    }
}
