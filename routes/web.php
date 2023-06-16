<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes(['register' => false]);

//admin routes
Route::group(['prefix'=>'admin', 'as'=>'admin.', 'namespace'=>'Admin', 'middleware'=>['auth', 'user-access:admin']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');
    Route::resource('site-configurations', 'SiteConfigurationsController');
    Route::resource('item-categories', 'ItemCategoriesController');
});

//visitor routes
Route::group(['prefix'=>'visitor', 'as'=>'visitor.', 'namespace'=>'Visitor', 'middleware'=>['auth', 'user-access:visitor']], function () {
    Route::get('/', 'VisitorController@index')->name('index');
});

//exhibitor routes
Route::group(['prefix'=>'exhibitor', 'as'=>'exhibitor.', 'namespace'=>'Exhibitor', 'middleware'=>['auth', 'user-access:exhibitor']], function () {
    Route::get('/', 'ExhibitorController@index')->name('index');
});