<?php
namespace Glumbo\Faq\Providers;
use Illuminate\Support\ServiceProvider;

Class FaqServiceProvider extends ServiceProvider{

    public function boot(){
       $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

    }

    public function regsiter(){


    }
}
?>