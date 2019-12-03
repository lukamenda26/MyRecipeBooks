<?php

namespace App\Providers;

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
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // サービスクラスはビジネスロジックを記載することも多いため、毎回インスタンスを作成する bind を使用するように登録します。
        // https://daiki-sekiguchi.com/2018/08/31/laravel-how-to-make-service-class/
        // $this->app->bind('BookReadService', BookReadService::class);
    }
}
