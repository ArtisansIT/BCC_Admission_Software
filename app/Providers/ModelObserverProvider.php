<?php

namespace App\Providers;

use App\Observers\StudentObserver;
use App\Student;
use Illuminate\Support\ServiceProvider;

class ModelObserverProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Student::observe(StudentObserver::class);
    }
}
