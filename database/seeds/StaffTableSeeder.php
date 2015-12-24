<?php

use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('staff')->truncate();
    	
        factory(App\Staff::class, 50)->create();
    }
}
