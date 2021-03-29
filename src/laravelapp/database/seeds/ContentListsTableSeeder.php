<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrs = ['新人スタッフ', 'ベテランスタッフ'];

        foreach ($arrs as $arr) {

            DB::table('content_lists')->insert([
                'name' => $arr,
                'type_id' => 1,
                'content_id' => 1,
                'disp_flag' => 1,
            ]);
        }
    }
}
