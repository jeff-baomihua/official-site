<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedProductTypesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $types = [
            [
                'name' => '5PK游戏',
                'description' => '5PK游戏介绍',
            ],
            [
                'name' => '6PK游戏',
                'description' => '6PK游戏介绍',
            ],
            [
                'name' => '滚轮游戏',
                'description' => '滚轮游戏介绍',
            ],
            [
                'name' => '水果机',
                'description' => '水果机介绍',
            ],
        ];

        DB::table('product_types')->insert($types);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('product_types')->truncate();
    }
}
