<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerViewProvider extends ServiceProvider
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
      View::composer(['admin.Student.allPendingStudent'],'App\Http\View\Composers\StudentComposer@incompleteVivaStudent');
      View::composer(['admin.Student.allCompleteStudent'],'App\Http\View\Composers\StudentComposer@completeVivaStudent');
    }
}
