<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(BasesTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(ContentsTableSeeder::class);
        $this->call(ContentListsTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
    }
}
