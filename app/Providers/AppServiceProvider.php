<?php

namespace App\Providers;

use App\Models\Course;
use App\Models\Player;
use App\Models\Student;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
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
        if(Schema::hasTable('students')){
            View::share('students',Student::all());
        }
        if(Schema::hasTable('courses')){
            View::share('courses',Course::all());
        }
        if(Schema::hasTable('players')){
            View::share('players',Player::all());
        }
    }
}
