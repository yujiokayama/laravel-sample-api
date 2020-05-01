<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // articlesテーブルにデータをinsert
        DB::table('articles')->insert([
            [
                'title' => 'タイトル1',
                'body' => '内容1',
                'tag' => 'news'
            ]
        ]);
    }
}
