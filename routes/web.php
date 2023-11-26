<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'login')->name('login');

Route::view('/dashboard', 'Dashboard')->name('dashboard');

Route::view('/profile', 'profile')->name('profile');

Route::view('/feeds', 'feeds.feeds')->name('feeds');

Route::view('/event', 'event.event')->name('event');

Route::view('/detail-feeds', 'feeds.detail')->name('detail-feeds');

Route::view('/project', 'project.project')->name('project');


//API
$router->group(['prefix' => 'task'], function () use ($router) {
    $router->get('/', 'TasksController@getAll');
    $router->get('/{id_task}', 'TasksController@getid');
    $router->post('/', 'TasksController@create');
    $router->put('/{id_task}', 'TasksController@update');
    $router->delete('/{id_task}', 'TasksController@delete');
});
$router->group(['prefix' => 'project'], function () use ($router) {
    $router->get('/project', 'ProjectsController@getAll');
    $router->get('/{id_proj}', 'ProjectsController@getid');
    $router->post('/', 'ProjectsController@create');
    $router->put('/{id_proj}', 'ProjectsController@update');
    $router->delete('/{id_proj}', 'ProjectsController@delete');
});
$router->group(['prefix' => 'event'], function () use ($router) {
    $router->get('/event', 'EventController@getAll');
    $router->get('/{id_event}', 'EventController@getid');
    $router->post('/', 'EventController@create');
    $router->put('/{id_event}', 'EventController@update');
    $router->delete('/{id_event}', 'EventController@delete');
});
$router->group(['prefix' => 'feed'], function () use ($router) {
    $router->get('/', 'FeedsController@getAll');
    $router->get('/{id_feed}', 'FeedsController@getid');
    $router->post('/', 'FeedsController@create');
    $router->put('/{id_feed}', 'FeedsController@update');
    $router->delete('/{id_feed}', 'FeedsController@delete');
});