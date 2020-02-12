<?php

Route::get('/','HomepageController@index');
//Admin Dashboard
Route::get('/dashboard','AdminController@index')->name('dashboard');
//AddressLine Form
Route::get('/dashboard/address-line','AdminController@address_line')->name('address_line');
//AddressLine Insert
Route::post('/dashboard/address-line/insert','AdminController@addressline_insert')->name('addressline_insert');
//AddressLine Infos
Route::get('/dashboard/addressline-info','AdminController@addressline_info')->name('addressline_info');
//AddressLine Edit
Route::get('/dashboard/addressline-info/edit/{id}','AdminController@addressline_edit')->name('addressline_edit');
//AddressLine Update
Route::post('/dashboard/addressline-info/update','AdminController@addressline_update')->name('addressline_update');

//Objective form
Route::get('/dashboard/objective/index','AdminController@objective_index')->name('objective_index');
//Objective Insert
Route::post('/dashboard/objective/insert','AdminController@objective_insert')->name('objective_insert');
//Objective Information
Route::get('/dashboard/objective-info','AdminController@objective_info')->name('objective_info');
//Objective Edit
Route::get('/dashboard/objective_info/edit/{id}','AdminController@objective_info_edit')->name('objective_info_edit');
//Update Objective
Route::post('/dashboard/objective_info/update','AdminController@objective_update')->name('objective_update');

//Links Form
Route::get('/dashboard/links/index','AdminController@link_index')->name('link_index');
//Links Insert
Route::post('/dashboard/links/insert','AdminController@link_insert')->name('link_insert');

//Links Information
Route::get('/dashboard/links/info','AdminController@link_info')->name('link_info');
//Edit Links
Route::get('/dashboard/links/edit/{id}','AdminController@link_edit')->name('link_edit');
//Update links
Route::post('/dashboard/links/update','AdminController@link_update')->name('link_update');

//Experiences form
Route::get('/dashboard/experiences/index','ExperienceController@experience_index')->name('experience_index');
//Experiences Information
Route::get('/dashboard/experiences','ExperienceController@experience_info')->name('experience_info');
//Experience Insert
Route::post('/dashboard/experiences/insert','ExperienceController@experience_insert')->name('experience_insert');
//Edit Experience
Route::get('/dashboard/experiences/edit/{id}','ExperienceController@experience_edit')->name('experience_edit');
//Update Experience
Route::post('/dashboard/experiences/update','ExperienceController@experience_update')->name('experience_update');

//Education Form
Route::get('/dashboard/education/index','EducationController@index')->name('education_index');
//Eduction Information
Route::get('/dashboard/education-info','EducationController@education_info')->name('education_info');
//Education Insert
Route::post('/dashboard/education/insert','EducationController@insert')->name('insert');



// Route::get('/', function () {
//     AddressLine::all();
//     return view('cv.index');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
