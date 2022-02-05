<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('messages')->insert([
        //     'title' => 'test title1',
        //     'content' => 'test content1'
        // ]);
        // DB::table('messages')->insert([
        //     'title' => 'test title2',
        //     'content' => 'test content2'
        // ]);
        // DB::table('messages')->insert([
        //     'title' => 'test title3',
        //     'content' => 'test content3'
        // ]);
        
        for ($i = 1; $i <= 100; $i++) {
            DB::table('messages')->insert([
                'title' => 'test title ' . $i,
                'content' => 'test content ' . $i
            ]);
        }
    }
}
