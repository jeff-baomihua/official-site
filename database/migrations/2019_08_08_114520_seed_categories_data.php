<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $categories = [
            [
                'name' => '游戏介绍',
                'description' => '游戏介绍',
                'route' => 'products',
                'sort' => 1,
            ],
            [
                'name' => '活动中心',
                'description' => '活动中心',
                'route' => 'articles',
                'sort' => 2,
            ],
            [
                'name' => '充值通道',
                'description' => '充值通道',
                'route' => 'recharge-channels',
                'sort' => 3,
            ],
            [
                'name' => '联系客服',
                'description' => '联系客服',
                'route' => 'contract-us',
                'sort' => 4,
            ],
        ];

        DB::table('categories')->insert($categories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('categories')->truncate();
    }
}
