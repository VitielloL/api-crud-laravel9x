<?php

namespace App\People\Providers;

use Illuminate\Support\ServiceProvider;
use App\People\Models\PeopleRepositoryInterface;
use App\People\Repositories\PeopleRepository;

class PeopleServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(PeopleRepositoryInterface::class, PeopleRepository::class);
    }

    public function boot()
    {
        //
    }
}
