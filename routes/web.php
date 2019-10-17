<?php

Route::get('/', 'Auth\LoginController@showLoginForm');

Route::get('/iot', 'IoTController@getView');

Route::get('/professor', 'ProfessorController@getProfessor');

//Route::post('/iot/setup', 'SubjectController@setUp')->name('iot.setup');

Route::get('subject/getDays', 'SubjectController@getDays');


