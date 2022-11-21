<?php

namespace App\Providers;

use App\Base\Repositories\BaseRepository;
use App\Base\Repositories\BaseRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class PeopleServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
    }

    public function boot()
    {
        //
    }
}
