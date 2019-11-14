<?php
namespace Glumbo\Faq\Providers;
use Illuminate\Support\ServiceProvider;

Class FaqServiceProvider extends ServiceProvider{

    public function boot(){
       $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
       $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
       $this->loadViewsFrom(__DIR__.'/../resources/views', 'faq');

    }

    public function regsiter(){


    }
}
?>