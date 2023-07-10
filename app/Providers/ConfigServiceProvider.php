<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\config as TBConfig;
use Illuminate\Support\Facades\DB;
class ConfigServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $data_config = DB::table('tb_config')->get();
        $result = [];
        $name_config = [];
        foreach ($data_config as $key=>$value) {
            $result[$value->title] = $value->content;
        }
        config(['tb_config' => $result]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
