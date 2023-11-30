<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LectureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lectures = [
            '経済基礎演習Ⅰ', '経済基礎演習Ⅱ', 'ミクロ経済学', 'マクロ経済学', '経済学のための数学',
            'データ処理入門', '経済専門演習Ⅰ', '経済専門演習Ⅱ', '経済専門演習Ⅲ', '経済専門演習Ⅳ',
            'ミクロ経済学', 'マクロ経済学', '経済学のための数学', 'データ処理入門', '現代経済入門',
            '西洋経済史入門', '日本経済史入門', '経済思想入門', '経済統計入門', '国際経済入門',
            'ミクロ経済学特論', 'マクロ経済学特論'
        ];

        foreach ($lectures as $lecture) {
            DB::table('lecture')->insert([
                'lecture_type' => rand(1, 3),
                'title' => $lecture,
                'description' => '講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。',
                'mon_period' => rand(0, 1) ? json_encode(range(1, 5)) : null,
                'tue_period' => rand(0, 1) ? json_encode(range(1, 5)) : null,
                'wed_period' => rand(0, 1) ? json_encode(range(1, 5)) : null,
                'thu_period' => rand(0, 1) ? json_encode(range(1, 5)) : null,
                'fri_period' => rand(0, 1) ? json_encode(range(1, 5)) : null,
                'sat_period' => rand(0, 1) ? json_encode(range(1, 5)) : null,
                'sun_period' => rand(0, 1) ? json_encode(range(1, 5)) : null,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
