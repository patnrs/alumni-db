<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //prefix
        DB::table('prefixID')->insert([
            ['prefix_name' => 'นาย'],['prefix_name' => 'นาง'],['prefix_name' => 'นางสาว'],
        ]);

        //gender
        DB::table('gender')->insert([
            ['gender_type' => 'ชาย'],['gender_type' => 'หญิง'], 
        ]);

        //blood_type
        DB::table('blood_type')->insert([
            ['blood_type' => 'A'],['blood_type' => 'B'],
            ['blood_type' => 'O'],['blood_type' => 'AB'], 
        ]);

        //career_status
        DB::table('career_status')->insert([
            ['career_status' => 'ทำงาน'],['career_status' => 'ว่างงาน'],
        ]);

        //generation
        DB::table('generation')->insert([
            [
                'batch' => 'ICED1',
                'gen_name' => 'นวัตกรรมและคอมพิวเตอร์ศึกษา รุ่น 1'
            ],
            [
                'batch' => 'ICED2',
                'gen_name' => 'นวัตกรรมและคอมพิวเตอร์ศึกษา รุ่น 2'
            ],
            [
                'batch' => 'ICED3',
                'gen_name' => 'นวัตกรรมและคอมพิวเตอร์ศึกษา รุ่น 3'
            ],
            [
                'batch' => 'ICED4',
                'gen_name' => 'นวัตกรรมและคอมพิวเตอร์ศึกษา รุ่น 4'
            ],
            [
                'batch' => 'ICED5',
                'gen_name' => 'นวัตกรรมและคอมพิวเตอร์ศึกษา รุ่น 5'
            ],
            [
                'batch' => 'ICED6',
                'gen_name' => 'นวัตกรรมและคอมพิวเตอร์ศึกษา รุ่น 6'
            ],
            [
                'batch' => 'CET7',
                'gen_name' => 'คอมพิวเตอร์และเทคโนโลยีการศึกษา รุ่น 7'
            ],
            [
                'batch' => 'CET8',
                'gen_name' => 'คอมพิวเตอร์และเทคโนโลยีการศึกษา รุ่น 8'
            ],
            [
                'batch' => 'CET9',
                'gen_name' => 'คอมพิวเตอร์และเทคโนโลยีการศึกษา รุ่น 9'
            ],
            [
                'batch' => 'CET10',
                'gen_name' => 'คอมพิวเตอร์และเทคโนโลยีการศึกษา รุ่น 10'
            ],
            [
                'batch' => 'CET11',
                'gen_name' => 'คอมพิวเตอร์และเทคโนโลยีการศึกษา รุ่น 11'
            ],
        ]);
    }
}
