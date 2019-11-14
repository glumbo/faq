<?php
namespace Glumbo\Faq\Providers;
use Illuminate\Support\ServiceProvider;

Class FaqServiceProvider extends ServiceProvider{

    public function boot(){
       $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
       $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
       $this->loadViewsFrom(__DIR__.'/../resources/views', 'faq');

        $this->publishConfig();
        $this->publishMigrations();

    }

    public function register()
    {
        
    }


    private function publishMigrations()
    {
        $path = $this->getMigrationsPath();
        $this->publishes([$path => database_path('migrations')], 'faq-migrations');
    }

    private function publishViews()
    {
        $path = $this->getViewsPath();
        $this->publishes([$path => resource_path('views')], 'faq-viewa');
    }

    private function getMigrationsPath()
    {
        return __DIR__ . '../../database/migrations/';
    }

    private function getViewsPath()
    {
        return __DIR__ . '../../resource/views/';
    }
}
?>