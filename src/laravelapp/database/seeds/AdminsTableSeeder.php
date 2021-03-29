<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $arrs = ['新人スタッフ', 'ベテランスタッフ'];

        // foreach ($arrs as $arr) {

        DB::table('admins')->insert([
            'email' => "masuda@marietta.co.jp",
            'lastname' => "masuda",
            'firstname' => "shusaku",
            'lastname_kana' => "マスダ",
            'firstname_kana' => "シュウサク",
            'group_id' => 1,
            'base_id' => 1,
            'password' => Hash::make("ma123456"),

        ]);


        // }
    }
}
