<?php

namespace App\Providers;

use App\Models\Course;
use App\Models\Player;
use App\Models\Student;
use Illuminate\Support\Facades\View;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('students',Student::all());
        View::share('courses',Course::all());
        View::share('players',Player::all());
    }
}
