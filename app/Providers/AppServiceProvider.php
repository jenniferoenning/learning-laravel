<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Jenssegers\Agent\Agent;

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
        $this->setUserAgent();
    }

    private function setUserAgent()
    {
        $agent = new Agent;
        $platform = $agent->isPhone() ? 'mobile' : 'desktop';

        define('PLATFORM', $platform);
    }
}
