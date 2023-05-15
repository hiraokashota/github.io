<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class reportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reports')->insert(
            [
              [
                'id' => '1',
                'goal_value' => 30,
                'result_value' => 20,
                'memo' => 'あああああ',
                'updated_at' => now(),
                'created_at' => now(),
                'alc_name1' => 'ビール',
                'alc_name2' => 'ワイン',
                'alc_name3' => 'ハイボール',
                'alc_name4' => '日本酒',
                'count1' => 2,
                'count2' => 0,
                'count3' => 1,
                'count4' => 10,
                'abv1' => 5,
                'abv2' => 12,
                'abv3' => 8,
                'abv4' => 15,
                'capacity1' => 350,
                'capacity2' => 150,
                'capacity3' => 400,
                'capacity4' => 80,
              ],
            ]
        );
    }
}
