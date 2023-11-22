<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TweetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tweets')->insert([
                'name'=>'John Doe',
                'username'=>'@johndoe',
                'time'=>'2h',
                'handle'=>'@johndoe',
                'image'=>'https://randomuser.me/api/portraits/men/40.jpg',
                'tweet'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.',
                'file'=>'/videos/videoplayback.mp4',
                'is_video'=>true,
                'comments'=>10,
                'retweets'=>20,
                'likes'=>30,
                'analytics'=>81,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
        ]);
            DB::table('tweets')->insert([
                'name'=>'taher ',
                'username'=>'@tahersn',
                'time'=>'2h',
                'handle'=>'@tahersn',
                'image'=>'https://randomuser.me/api/portraits/men/40.jpg',
                'tweet'=>'Ayya winkom ay.',
                'file'=>'/videos/videoplayback.mp4',
                'is_video'=>true,
                'comments'=>30,
                'retweets'=>22,
                'likes'=>300,
                'analytics'=>81,
                'created_at'=>Carbon::now()->subDays(1),
                'updated_at'=>Carbon::now()->subDays(1)

        ]);
            DB::table('tweets')->insert([
                'name'=>' yassine',
                'username'=>'@tachoun',
                'time'=>'2h',
                'handle'=>'@tachoun',
                'image'=>'https://randomuser.me/api/portraits/men/40.jpg',
                'tweet'=>' Ayya bye ay.',
                'file'=>'/videos/videoplayback.mp4',
                'is_video'=>true,
                'comments'=>12,
                'retweets'=>22,
                'likes'=>63,
                'analytics'=>81,
                'created_at'=>Carbon::now()->subDays(2),
                'updated_at'=>Carbon::now()->subDays(2)
        ]);
        //

    }
}
