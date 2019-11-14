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
        $this->mergeConfig();
    }

    private function mergeConfig()
    {
        $path = $this->getConfigPath();
        $this->mergeConfigFrom($path, 'faq');
    }

    private function publishConfig()
    {
        $path = $this->getConfigPath();
        $this->publishes([$path => config_path('faq.php')], 'config');
    }

    private function publishMigrations()
    {
        $path = $this->getMigrationsPath();
        $this->publishes([$path => database_path('migrations')], 'migrations');
    }

    private function publishViews()
    {
        $path = $this->getViewsPath();
        $this->publishes([$path => resource_path('views')], 'views');
    }

    private function getConfigPath()
    {
        return __DIR__ . '/../config/faq.php';
    }

    private function getMigrationsPath()
    {
        return __DIR__ . '/../database/migrations/';
    }

    private function getViewsPath()
    {
        return __DIR__ . '/../resource/views/';
    }
}
?>