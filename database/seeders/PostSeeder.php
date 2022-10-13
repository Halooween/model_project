<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $data = [];
        $faker = Faker::create();

        for($i=0; $i< 500; $i++) {
            $data[] = [
            'position'=> $faker->text(10),
            'status'=> $faker->boolean(),
            'description'=>$faker->text(200)
            ];

        }
        $chunks = array_chunk($data, 100);
        foreach ($chunks as $chunk) {
        Post::insert($chunk);
    }
}

}
