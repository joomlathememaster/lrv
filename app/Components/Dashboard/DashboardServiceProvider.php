<?php namespace App\Components\Dashboard;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;


class DashboardServiceProvider extends ServiceProvider
{
 
    protected $namespace = 'App\Components\Dashboard\Http\Controllers';

     
    public function boot(Router $router)
    {  
        parent::boot($router);
        $this->loadViewsFrom(__DIR__ . '/Resources/views', 'Dashboard'); 
    }

     
    public function map(Router $router)
    { 
       $router->group(['namespace' => $this->namespace], function ($router) { 
            require app_path('Components/Dashboard/routes.php');
        });
    }

    public function register()
    {
    }

}