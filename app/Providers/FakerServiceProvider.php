<?php

namespace App\Providers;

use App\Faker\ImageProvider;
use Faker\Factory;
use Faker\Generator;
use Illuminate\Support\ServiceProvider;

class FakerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(Generator::class, function () {
            $faker = Factory::create();
            $faker->addProvider(new ImageProvider($faker));
            return $faker;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
