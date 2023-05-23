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
                'task_name' => 20230523,
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
              ],
              [
                'id' => '2',
                'task_name' => 20230524,
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
              ],
              [
                'id' => '3',
                'task_name' => 20230524,
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
              ],
            ]
        );  
    }
}
