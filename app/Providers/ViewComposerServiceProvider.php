<?php

namespace App\Providers;

use App\Models\banner;
use App\Models\categories;
use App\Models\courses;
use App\Models\lectures;
use App\Models\Menu;
use App\Models\MenuAdmin;
use App\Models\Strengths;
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
        $this->composeMenuAdmin();
        $this->composeStrengths();
        $this->composeViewCategories();
        $this->composeViewCoursePopular();
        $this->composoViewLecture();
    }

    private function composeMenuView()
    {
        View::composer('front_end.blocks.menu', function ($view) {
            $list_menu = Menu::all();
            $view->with('list_menu', $list_menu);
        });
    }

    private function composeBannerView()
    {
        View::composer('front_end.blocks.banner', function ($view) {
            $list_banner = banner::all();
            $view->with('list_banner', $list_banner);
        });
    }

    private function composeMenuAdmin()
    {
        View::composer('back_end.layout.navbar', function ($view) {
            $menuList = MenuAdmin::all();
            $view->with('menuList', $menuList);
        });
    }

    private function composeStrengths()
    {
        view::composer('front_end.blocks.strengths', function ($view) {
            $list_strengths = Strengths::select('id', 'name', 'name_short', 'icon_svg')->get();
            $view->with('list_strengths', $list_strengths);
        });
    }

    private function composeViewCategories()
    {
        view::composer('front_end.blocks.categories', function ($view) {
            $title = 'Course Categories';
            $data = categories::select('id', 'name', 'image', 'description', 'slug')->get();
            $view->with('title', $title)->with('data', $data);
        });
        View::share('data_cat', categories::select('id', 'name', 'image', 'description', 'slug')->get());
    }

    private function composeViewCoursePopular()
    {
        view::composer('front_end.blocks.coursePopular', function ($view) {
            $title = 'Available Courses';
            $data = courses::select('id', 'title', 'image', 'description', 'start_date', 'end_date', 'price' , 'id_lecture' , 'slug')->limit(3)->get();
            $view->with('title', $title)->with('data', $data);
        });
        View::share('data_popular', courses::select('id', 'title', 'image', 'description', 'start_date', 'end_date', 'price' , 'id_lecture' , 'slug')->get());
    }

    private function composoViewLecture()
    {
        view::composer('front_end.blocks.TeamCourse', function ($view) {
            $title = 'Lecture Team';
            $data = lectures::select('id', 'name', 'description', 'duration', 'image', 'specialize' , 'slug')->limit(4)->get();
            $view->with('title', $title)->with('data', $data);
        });
    }

}
