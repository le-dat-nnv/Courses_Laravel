<?php

namespace App\Providers;

use App\Models\banner;
use App\Models\Menu;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewComposerServiceProvider extends ServiceProvider
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
        $this->composeMenuView();
        $this->composeBannerView();
    }

    private function composeMenuView()
    {
        View::composer('front_end.blocks.menu', function ($view) {
            $list_menu = Menu::all();
            $view->with('list_menu', $list_menu);
        });
    }

    private function composeBannerView() {
        View::composer('front_end.blocks.banner' , function ($view) {
            $list_banner = banner::all();
            $view->with('list_banner' , $list_banner);
        });
    }

}
