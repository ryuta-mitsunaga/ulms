<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LectureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mon_lectures = [
            ['経済基礎演習Ⅰ', 1], ['経済基礎演習Ⅱ', 2], ['ミクロ経済学', 3], ['マクロ経済学', 4], ['経済学のための数学', 5],
        ];

        foreach ($mon_lectures as $lecture) {
            DB::table('lecture')->insert([
                'lecture_type' => rand(1, 3),
                'title' => $lecture[0],
                'description' => '講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。',
                'mon_period' => json_encode([$lecture[1]]),
                'tue_period' => null,
                'wed_period' => null,
                'thu_period' => null,
                'fri_period' => null,
                'sat_period' => null,
                'sun_period' => null,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        $tue_lectures = [
            ['データ処理入門', 1], ['経済専門演習Ⅰ', 2], ['経済専門演習Ⅱ', 3], ['経済専門演習Ⅲ', 4], ['経済専門演習Ⅳ', 5],
        ];

        foreach ($tue_lectures as $lecture) {
            DB::table('lecture')->insert([
                'lecture_type' => rand(1, 3),
                'title' => $lecture[0],
                'description' => '講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。',
                'mon_period' => null,
                'tue_period' => json_encode([$lecture[1]]),
                'wed_period' => null,
                'thu_period' => null,
                'fri_period' => null,
                'sat_period' => null,
                'sun_period' => null,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        $wed_lectures = [
            ['国際経済入門', 5],['ミクロ経済学特論', 1], ['マクロ経済学特論', 2]
        ];

        foreach ($wed_lectures as $lecture) {
            DB::table('lecture')->insert([
                'lecture_type' => rand(1, 3),
                'title' => $lecture[0],
                'description' => '講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。',
                'mon_period' => null,
                'tue_period' => null,
                'wed_period' => json_encode([$lecture[1]]),
                'thu_period' => null,
                'fri_period' => null,
                'sat_period' => null,
                'sun_period' => null,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        $thu_lectures = [
            ['ミクロ経済学', 1], ['マクロ経済学', 2], ['経済学のための数学', 3], ['データ処理入門', 4], ['現代経済入門', 5],
        ];

        foreach ($thu_lectures as $lecture) {
            DB::table('lecture')->insert([
                'lecture_type' => rand(1, 3),
                'title' => $lecture[0],
                'description' => '講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。',
                'mon_period' => null,
                'tue_period' => null,
                'wed_period' => null,
                'thu_period' => json_encode([$lecture[1]]),
                'fri_period' => null,
                'sat_period' => null,
                'sun_period' => null,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        $fri_lectures = [
            ['西洋経済史入門', 1], ['日本経済史入門', 2], ['経済思想入門', 3], ['経済統計入門', 4],
        ];

        foreach ($fri_lectures as $lecture) {
            DB::table('lecture')->insert([
                'lecture_type' => rand(1, 3),
                'title' => $lecture[0],
                'description' => '講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。講義の説明文が入ります。',
                'mon_period' => null,
                'tue_period' => null,
                'wed_period' => null,
                'thu_period' => null,
                'fri_period' => json_encode([$lecture[1]]),
                'sat_period' => null,
                'sun_period' => null,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
