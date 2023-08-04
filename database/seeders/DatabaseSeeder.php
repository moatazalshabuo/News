<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\News::factory(10)->create();

        for($i = 0;$i < 10;$i++)
        \App\Models\News::create([
            'title' => 'Test User',
            'description' => '
            Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
        ',
        'create_by'=>1,
        "catogry_id"=>2,
        'image_1'=>'1691098722.png'
        ]);
    }
}
