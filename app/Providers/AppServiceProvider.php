<?php

namespace App\Providers;

use App\Interfaces\EloquentRepositoryInterface;
use App\Interfaces\HotelRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Repositories\Hotel\HotelRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(HotelRepositoryInterface::class, HotelRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
