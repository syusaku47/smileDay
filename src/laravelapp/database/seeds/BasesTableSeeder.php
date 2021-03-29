<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bases')->insert([
            'base_name' => '東京拠点',
            'base_name_kana' => 'トウキョウキョテン',
            'potal_number' => 1541212,
            'prefectures_id' => 1,
            'city' => '東京都',
            'town' => '足立区',
            'phone_number' => 11,
            'base_type_id' => 0
        ]);
    }
}
