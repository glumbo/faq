<?php

$nameSpace= 'Faq\Http\Controllers';

Route::group([
    'namespace' => $nameSpace,
    'prefix' => 'audit'
], function(){

    Route::get('/','FaqController@index');

});

?>