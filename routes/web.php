<?php

Route::get('/', 'Auth\LoginController@showLoginForm');

Route::get('/iot', 'IoTController@getView');

Route::get('/professor', 'ProfessorController@getProfessor');

Route::get('subject/getDays', 'SubjectController@getDays');

Route::get('subject/{id}', 'SubjectController@getProfile');


