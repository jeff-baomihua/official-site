<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedArticleTypesData extends Migration
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
                'name' => '游戏活动',
                'description' => '游戏活动分类',
            ],
            [
                'name' => '系统公告',
                'description' => '系统公告分类',
            ],
        ];

        DB::table('article_types')->insert($types);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('article_types')->truncate();
    }
}
