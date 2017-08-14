<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/',"IndexController@index");

Route::get('/home', 'HomeController@index');

Route::get('/register', 'IndexController@index');

Route::get('/password/reset', 'HomeController@index');

Route::get('/single/{id}', "IndexController@show");

Route::get('/downloadCV','IndexController@getDownload');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin',"AdminController@admin");

    Route::get('/about',"AboutController@index");

    Route::get('/aboutCreate', "AboutController@create");

    Route::post('/about-create', "AboutController@store");

    Route::get('/about/{about}/aboutEdit', "AboutController@edit");

    Route::patch('/about/{about}', "AboutController@update");

    Route::get('/services', "ServicesController@index");

    Route::get('/serviceCreate', "ServicesController@create");

    Route::post('/service-create', "ServicesController@store");

    Route::get('/service/{service}/serviceEdit', "ServicesController@edit");

    Route::patch('/service/{service}',"ServicesController@update");

    Route::delete('/service/{service}/delete', "ServicesController@destroy");

    Route::get('/skills', "SkillsController@index");

    Route::get('/skillCreate',"SkillsController@create");

    Route::post('/skill-create',"SkillsController@store");

    Route::get('/skill/{skill}/skillEdit',"SkillsController@edit");

    Route::patch('/skill/{skill}', "SkillsController@update");

    Route::delete('/skill/{skill}/delete', "SkillsController@destroy");

    Route::get('/works',"WorksController@index");

    Route::get('/workCreate', "WorksController@create");

    Route::post('/work-create', "WorksController@store");

    Route::delete('/work/{work}/delete',"WorksController@destroy");

    Route::get('/portfolios', "PortfoliosController@index");

    Route::get('/portfolioCreate', "PortfoliosController@create");

    Route::post('/portfolio-create', "PortfoliosController@store");

    Route::get('/portfolio/{portfolio}/portfolioEdit', "PortfoliosController@edit");

    Route::patch('/portfolio/{portfolio}', "PortfoliosController@update");

    Route::delete('/portfolio/{portfolio}/delete', "PortfoliosController@destroy");

    Route::get('/categories',"CategoriesController@index");

    Route::get('/categoryCreate',"CategoriesController@create");

    Route::post('/category-create', "CategoriesController@store");

    Route::delete('/category/{category}/delete', "CategoriesController@destroy");

    Route::get('/posts', "PostsController@index");

    Route::get('/postCreate', "PostsController@create");

    Route::post('/post-create', "PostsController@store");

    Route::get('/post/{post}/postEdit', "PostsController@edit");

    Route::patch('/post/{post}', "PostsController@update");

    Route::delete('/post/{post}/delete', "PostsController@destroy");

    Route::get('/contact', "ContactsController@index");

    Route::get('/contactCreate', "ContactsController@create");

    Route::post('/contact-create', "ContactsController@store");

    Route::get('/contact/{contact}/contactEdit', "ContactsController@edit");

    Route::patch('/contact/{contact}', "ContactsController@update");

    Route::get('/socials', "SocialsController@index");

    Route::get('/socialCreate', "SocialsController@create");

    Route::post('/social-create', "SocialsController@store");

    Route::get('/social/{social}/socialEdit', "SocialsController@edit");

    Route::patch('social/{social}', "SocialsController@update");

    Route::delete('/social/{social}/delete', "SocialsController@destroy");
});
