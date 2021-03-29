<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 1; $i <= 7; $i++) {

            DB::table('contents')->insert([
                'base_id' => 1,
                'type_id' => $i,
                'disp_flag' => 1,

            ]);
        }
    }
}
