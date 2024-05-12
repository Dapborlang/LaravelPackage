<?php
namespace Rdmarwein\FormApi;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class FormApiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    public function register()
    {

    }
}