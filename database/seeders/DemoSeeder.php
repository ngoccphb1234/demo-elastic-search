<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('demos')->insert([
            [
                'my_field' => 'アメリカ'
            ],
            [
                'my_field' => '米国'
            ],
            [
                'my_field' => 'アメリカの大学'
            ],
            [
                'my_field' => '東京大学'
            ],
            [
                'my_field' => '帝京大学'
            ],
            [
                'my_field' => '東京で夢の大学生活'
            ],
            [
                'my_field' => '東京大学で夢の生活'
            ],
            [
                'my_field' => '東大で夢の生活'
            ],
            [
                'my_field' => '首都圏の大学 東京'
            ]
        ]);
    }
}
