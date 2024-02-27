<?php

namespace App\Providers;

use App\Repositories\SupportRepositotyInterface;
use Illuminate\Support\ServiceProvider;
use App\Repositories\SupportEloquentORM;
use App\Repositories\ConsultaEloquentORM;
use App\Repositories\ConsultaRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(SupportRepositotyInterface::class,SupportEloquentORM::class);
        $this->app->bind(ConsultaRepositoryInterface::class,ConsultaEloquentORM::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
