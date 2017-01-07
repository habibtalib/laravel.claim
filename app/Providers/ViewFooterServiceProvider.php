<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\TrSettings;

class ViewFooterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
          view()->composer('back.layouts.admin_footer',function($view){

            $settingInitial = TrSettings::where('field','Initial Name')->value('value');
            $settingWebsite = TrSettings::where('field','Website Name')->value('value');
            $settingCopyRight = TrSettings::where('field','Copyright')->value('value');
            $view->with(['settingWebsite'=>$settingWebsite,'settingCopyRight'=>$settingCopyRight,'settingInitial'=>$settingInitial]);

        });


    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
