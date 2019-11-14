<?php
namespace Glumbo\Faq\Providers;
use Illuminate\Support\ServiceProvider;

Class FaqServiceProvider extends ServiceProvider{

    public function boot(){
       $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
       $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
       $this->loadViewsFrom(__DIR__.'/../resources/views', 'faq');

       $this->publishes([__DIR__.'/../database/migrations/' => database_path('migrations')], 'faq-migrations');
       $this->publishes([__DIR__.'/../resources/views' => resource_path('views/vendor/faqs')], 'faq-views');

    }

    public function regsiter(){


    }
}
?>