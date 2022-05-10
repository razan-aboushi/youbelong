<?php

namespace App\Providers;

use App\Models\Advertisement;
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
        view()->composer([
            'partials.site-footer',
        ], function ($view) {
            $active_ad = Advertisement::where('status', 1)
                ->whereDate('start_date', '<=', now())
                ->whereDate('end_date', '>=', now())
                ->inRandomOrder()
                ->first();

            $view->with(['active_ad' => $active_ad]);
        });
    }
}
