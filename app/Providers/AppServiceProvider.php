<?php

namespace App\Providers;

use App\Http\ViewComposers\CategoriesComposer;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        // 当渲染以下路由页面时，自动注入 categories 变量
        \View::composer(['pages.index', 'products.index', 'products.show', 'articles.index', 'articles.show', 'pages.contract-us', 'pages.recharge-channels'], CategoriesComposer::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
