<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    public function run()
    {
        // DB::table('テーブル名')->insert(['カラム名' => 'データ' ] );
// use Illuminate\Support\Facades\DB;　を追記
// use DateTime;　を追記
      DB::table('posts')->insert([
                'title' => '本日のトレーニングを投稿',
                'body' => '命名はデータを基準に考える',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
