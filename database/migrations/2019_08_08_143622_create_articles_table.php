<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('article_type_id')->nullable();// 关联 文章类型表
            $table->foreign('article_type_id')->references('id')->on('article_types')->onDelete('set null');
            $table->string('url')->comment('跳转链接（点击标题优先跳转）')->default('');
            $table->string('title')->index()->comment('标题')->default('');
            $table->text('body')->comment('内容描述');
            $table->timestamps();
        });

        $articles = [
            [
                'article_type_id' => 1,
                'title' => '活动介绍之一：喜从天降',
                'body' => '我是这么描述『喜从天降』的...html',
            ],
            [
                'article_type_id' => 1,
                'title' => '活动介绍之二：天降宝箱',
                'body' => '我是这么描述『天降宝箱』的...html',
            ],
            [
                'article_type_id' => 1,
                'title' => '活动介绍之三：摇钱树',
                'body' => '我是这么描述『摇钱树』的...html',
            ],
            [
                'article_type_id' => 2,
                'title' => '这是一条系统公告',
                'body' => '我是这么描述『第一条系统公告』的...html',
            ],
            [
                'article_type_id' => 2,
                'title' => '这是一条可以跳转百度的系统公告',
                'body' => '我是这么描述『第二条系统公告』的...html',
            ],
            [
                'article_type_id' => 2,
                'title' => '我们都是测试公告' . rand(50, 1000),
                'body' => '我是这么描述『第' . rand(50, 1000) . '条测试系统公告』的...html',
            ],
            [
                'article_type_id' => 2,
                'title' => '我们都是测试公告' . rand(50, 1000),
                'body' => '我是这么描述『第' . rand(50, 1000) . '条测试系统公告』的...html',
            ],
            [
                'article_type_id' => 2,
                'title' => '我们都是测试公告' . rand(50, 1000),
                'body' => '我是这么描述『第' . rand(50, 1000) . '条测试系统公告』的...html',
            ],[
                'article_type_id' => 2,
                'title' => '我们都是测试公告' . rand(50, 1000),
                'body' => '我是这么描述『第' . rand(50, 1000) . '条测试系统公告』的...html',
            ],
            [
                'article_type_id' => 2,
                'title' => '我们都是测试公告' . rand(50, 1000),
                'body' => '我是这么描述『第' . rand(50, 1000) . '条测试系统公告』的...html',
            ],[
                'article_type_id' => 2,
                'title' => '我们都是测试公告' . rand(50, 1000),
                'body' => '我是这么描述『第' . rand(50, 1000) . '条测试系统公告』的...html',
            ],[
                'article_type_id' => 2,
                'title' => '我们都是测试公告' . rand(50, 1000),
                'body' => '我是这么描述『第' . rand(50, 1000) . '条测试系统公告』的...html',
            ],[
                'article_type_id' => 2,
                'title' => '我们都是测试公告' . rand(50, 1000),
                'body' => '我是这么描述『第' . rand(50, 1000) . '条测试系统公告』的...html',
            ],[
                'article_type_id' => 2,
                'title' => '我们都是测试公告' . rand(50, 1000),
                'body' => '我是这么描述『第' . rand(50, 1000) . '条测试系统公告』的...html',
            ],
        ];

        DB::table('articles')->insert($articles);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');

        //清空
        DB::table('articles')->truncate();
    }
}
