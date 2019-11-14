<?php

$nameSpace= 'Glumbo\Faq\Http\Controllers';

Route::group([
    'namespace' => $nameSpace,
    'prefix' => 'faqs',
    'as' => 'faqs.'
], function(){

    Route::get('/','FaqController@index')->name('index');

    Route::get('create','FaqController@create')->name('create');

    Route::get('edit/{faq}','FaqController@edit')->name('edit');

    Route::post('store','FaqController@store')->name('store');

    Route::post('update/{faq}','FaqController@update')->name('update');

    Route::get('delete/{faq}','FaqController@delete')->name('delete');

});

?>