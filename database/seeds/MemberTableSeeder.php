<?php

use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // membersテーブルにデータをinsert
        DB::table('members')->insert([
            [
                'name' => 'イチロー',
                'age' => 30,
            ],
            [
                'name' => 'ジロー',
                'age' => 20,
            ]
        ]);
    }
}
