<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PpTbleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'date' => 2021-05-06,
        ];
        DB::table('pp')->insert($param);

        $param = [
            'name' => 'jiro',
            'date' => 2021-05-05,
        ];
        DB::table('pp')->insert($param);
    }
}
