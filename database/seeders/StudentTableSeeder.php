<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('student')->insert([
            'name_sei' => '山田',
            'name_mei' => '太郎',
            'email' => 'test1@a.jp',
            'password' => bcrypt('11111111'),
            'remember_token' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('student')->insert([
            'name_sei' => '鈴木',
            'name_mei' => '太郎',
            'email' => 'test2@a.jp',
            'password' => bcrypt('11111111'),
            'remember_token' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('student')->insert([
            'name_sei' => '藤井',
            'name_mei' => '太郎',
            'email' => 'test3@a.jp',
            'password' => bcrypt('11111111'),
            'remember_token' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
