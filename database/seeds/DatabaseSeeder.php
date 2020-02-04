<?php

use Illuminate\Database\Seeder;
use App\Barang;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  $this->call(UsersTableSeeder::class);
        // $this->call(PostsTableSeeder::class);
        // $this->call(Penggajian::class);
        // $this->call(ArtikelSeeder::class);
        factory(Barang::class, 100)->create();
    }
}
