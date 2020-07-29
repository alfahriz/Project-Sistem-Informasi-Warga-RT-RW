<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Stating;
use App\Alamat;
use App\Bansos;

class FormRTServiceProvider extends ServiceProvider
{
    public function boot()
    {
        view()->composer('form', function($view) {
            $view->with('statinglist', Stating::pluck('statustinggal', 'idstg'));
            $view->with('alamatlist', Alamat::pluck('alamatjalan', 'idalmt'));
            $view->with('bansoslist', Bansos::pluck('namabansos', 'idbansos'));
        });
        view()->composer('formed', function($view) {
            $view->with('statinglist', Stating::pluck('statustinggal', 'idstg'));
            $view->with('alamatlist', Alamat::pluck('alamatjalan', 'idalmt'));
            $view->with('bansoslist', Bansos::pluck('namabansos', 'idbansos'));
        });
    }

    public function register()
    {
        //
    }
}
