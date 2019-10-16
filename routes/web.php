<?php

Route::get('/iot', 'SubjectController@getView');

//Route::post('/iot/setup', 'SubjectController@setUp')->name('iot.setup');

//Route::resource('subject', 'SubjectController');

Route::get('/', function(){
    return view('login');
});
