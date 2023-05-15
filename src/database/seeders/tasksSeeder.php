<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('tasks')->insert(
            [
              [
                'id' => '1',
                'task_name' => 20230512,
                'status_flg' => 1,
                'delete_flg' => false,
                'created_at' => now(),
                'updated_at' => now(),
              ],
              [
                'id' => '2',
                'task_name' => 20230511,
                'status_flg' => 0,
                'delete_flg' => true,
                'created_at' => now(),
                'updated_at' => now(),
              ],
              [
                'id' => '3',
                'task_name' => 20230512,
                'status_flg' => 2,
                'delete_flg' => false,
                'created_at' => now(),
                'updated_at' => now(),
              ],
            ]
        );  
    }
}
