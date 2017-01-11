<?php

use Illuminate\Database\Seeder;

use App\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->delete();
        
        Comment::create([
            'author' => '名無し',
            'text' => '今日はいい天気ですね。気持ちが良いですね。'
        ]);
        
        Comment::create([
            'author' => '山田',
            'text' => '久しぶり。山田です。'
        ]);
        
        Comment::create([
            'author' => '太郎',
            'text' => 'Laravelって便利なんですね。はじめて知りました。'
        ]);
    }
}
