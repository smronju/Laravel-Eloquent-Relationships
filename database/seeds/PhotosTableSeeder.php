<?php

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->truncate();

        for ($photos = 0; $photos < 100; $photos++) { 
        	DB::table('photos')->insert([
        		[
        			'path' => 'image'.$photos.'.jpg',
        			'imageable_id' => rand(1, 50),
        			'imageable_type' => (($photos % 2) == 0) ? 'App\Staff' : 'App\Product'
        		]
        	]);
        }
    }
}
