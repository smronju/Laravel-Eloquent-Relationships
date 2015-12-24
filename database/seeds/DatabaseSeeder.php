<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsersTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(AddressesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(StaffTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(PhotosTableSeeder::class);

        Model::reguard();
    }
}
