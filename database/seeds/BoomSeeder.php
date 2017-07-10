<?php

use Illuminate\Database\Seeder;

class BoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('newsblogs')->insert([
            'title' => str_random(10),
            'description' => str_random(10),
        ]);
    }
}
