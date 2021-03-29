<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $arrs = ['スタッフ紹介', 'IT教室', '脳トレ', 'なごやか体操', 'ラジオ体操', '懐かし映像', '今日は何の日?'];

        foreach ($arrs as $arr) {

            DB::table('types')->insert([
                'name' => $arr,

            ]);
        }
    }
}
