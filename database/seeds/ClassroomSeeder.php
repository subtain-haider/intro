<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classrooms')->insert([
            [
                'code' => '9th',
                'name' => '9th class',
            ],
            [
                'code' => '10th',
                'name' => '10th class',
            ],
            [
                'code' => '11th',
                'name' => 'First Year',
            ],
        ]);
    }
}
