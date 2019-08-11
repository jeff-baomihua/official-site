<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('标题')->default('');
            $table->string('sub_title')->comment('副标题')->default('');
            $table->string('url')->comment('跳转链接')->default('');
            $table->tinyInteger('type')->comment('图片用于, 如：1:首页轮播图')->default(0);
            $table->string('image')->comment('路径')->default('');
            $table->tinyInteger('sort')->default(0)->comment('排序');
            $table->timestamps();
        });

        // 插入测试图片
        $images = [
            [
                'type' => 1,
                'image' => '/res/static/img/banner1.jpg',
                'title' => '网路公司',
                'sub_title' => '完美前端体验',
            ],
            [
                'type' => 1,
                'image' => '/res/static/img/banner2.jpg',
                'title' => '网路公司',
                'sub_title' => '完美前端体验',
            ],
        ];

        DB::table('images')->insert($images);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');

        // 清空图片
        DB::table('images')->truncate();
    }
}
