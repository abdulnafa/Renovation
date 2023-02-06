<?php

namespace App\Providers;

use App\Models\FooterDetail;
use App\Models\Service;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        $allservicesmainhome=Service::all();
        $footerdetail=FooterDetail::all();
        View::share(['allservicesmainhome'=> $allservicesmainhome,'footerdetail'=>$footerdetail]);
        
    }
}
