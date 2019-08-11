<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('名称');
            $table->unsignedInteger('product_type_id')->comment('游戏类型')->default(0);// 来自 product_types 表
            //外键关联，type 删除 ，关联数据删除
            $table->foreign('product_type_id')->references('id')->on('product_types')->onDelete('cascade');
            $table->string('image_large')->comment('Logo-large')->default('');
            $table->string('image_small')->comment('Logo-small')->default('');
            $table->tinyInteger('sort')->comment('排序')->default(0);
            $table->text('description')->comment('游戏介绍');
            $table->timestamps();
        });

        // 插入初始产品数据
        $products = [
            [
                'name' => '火凤凰',
                'product_type_id' => 1,
                'image_large' => '/res/static/img/Big_icon1.png',
                'image_small' => '/res/static/img/Big_icon1.png',
                'description' => '',
            ],
            [
                'name' => '火麒麟',
                'product_type_id' => 1,
                'image_large' => '/res/static/img/Big_icon1.png',
                'image_small' => '/res/static/img/Big_icon1.png',
                'description' => '',
            ],
            [
                'name' => '大白鲨',
                'product_type_id' => 1,
                'image_large' => '/res/static/img/Big_icon1.png',
                'image_small' => '/res/static/img/Big_icon1.png',
                'description' => '',
            ],
            [
                'name' => 'ATT2',
                'product_type_id' => 1,
                'image_large' => '/res/static/img/Big_icon1.png',
                'image_small' => '/res/static/img/Big_icon1.png',
                'description' => '',
            ],
            [
                'name' => '大字板',
                'product_type_id' => 1,
                'image_large' => '/res/static/img/Big_icon1.png',
                'image_small' => '/res/static/img/Big_icon1.png',
                'description' => '',
            ],
            [
                'name' => '金皇冠',
                'product_type_id' => 1,
                'image_large' => '/res/static/img/Big_icon1.png',
                'image_small' => '/res/static/img/Big_icon1.png',
                'description' => '',
            ],
            [
                'name' => '水果乐园',
                'product_type_id' => 1,
                'image_large' => '/res/static/img/Big_icon1.png',
                'image_small' => '/res/static/img/Big_icon1.png',
                'description' => '',
            ],
            [
                'name' => '超级大亨',
                'product_type_id' => 2,
                'image_large' => '/res/static/img/Big_icon1.png',
                'image_small' => '/res/static/img/Big_icon1.png',
                'description' => '',
            ],
            [
                'name' => '水浒传',
                'product_type_id' => 3,
                'image_large' => '/res/static/img/Big_icon1.png',
                'image_small' => '/res/static/img/Big_icon1.png',
                'description' => '',
            ],
            [
                'name' => '明星97',
                'product_type_id' => 4,
                'image_large' => '/res/static/img/Big_icon1.png',
                'image_small' => '/res/static/img/Big_icon1.png',
                'description' => '',
            ],
        ];

        DB::table('products')->insert($products);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');

        //清空数据
        DB::table('products')->truncate();
    }
}
