<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BannerimageController;
use App\Http\Controllers\Admin\FeaturedController;
use App\Http\Controllers\Admin\LogoController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Frontend\MainController as FrontendMainController;
use Illuminate\Support\Facades\Route;

//main backend

Route::get('/login',[MainController::class,'login'])->name('login');

//for-mainlogo

Route::group(['prefix' => 'admin'], function() {
 Route::get('/logo-index',[LogoController::class,'logoIndex'])->name('logo.index');
 Route::get('/logo-create',[LogoController::class,'logoCreate'])->name('logo.create');
 Route::post('/logo-store',[LogoController::class,'logoStore'])->name('logo.store');
 Route::get('/logo-edit/{id}',[LogoController::class,'logoEdit'])->name('logo.edit');
 Route::post('/logo-update',[LogoController::class,'logoUpdate'])->name('logo.update');
 Route::get('/logo-delete/{id}',[LogoController::class,'logoDelete'])->name('logo.delete');
});

//

//for bannerimage

Route::group(['prefix' => 'admin'], function() {
    Route::get('/bannerimage-index',[BannerimageController::class,'bannerimageIndex'])->name('bannerimage.index');
    Route::get('/bannerimage-create',[BannerimageController::class,'bannerimageCreate'])->name('bannerimage.create');
    Route::post('/bannerimage-store',[BannerimageController::class,'bannerimageStore'])->name('bannerimage.store');
    Route::get('/bannerimage-edit/{id}',[BannerimageController::class,'bannerimageEdit'])->name('bannerimage.edit');
    Route::post('/bannerimage-update',[BannerimageController::class,'bannerimageUpdate'])->name('bannerimage.update');
    Route::get('/bannerimage-delete/{id}',[BannerimageController::class,'bannerimageDelete'])->name('bannerimage.delete');
   });

   //

   //for banner

   Route::group(['prefix' => 'admin'], function() {
        Route::get('/banner-index',[BannerController::class,'bannerIndex'])->name('banner.index');
        Route::get('/banner-create',[BannerController::class,'bannerCreate'])->name('banner.create');
        Route::post('/banner-store',[BannerController::class,'bannerStore'])->name('banner.store');
        Route::get('/banner-edit/{id}',[BannerController::class,'bannerEdit'])->name('banner.edit');
        Route::post('/banner-update',[BannerController::class,'bannerUpdate'])->name('banner.update');
        Route::get('/banner-delete/{id}',[BannerController::class,'bannerDelete'])->name('banner.delete');
   });

   //

   //for-featured
   Route::group(['prefix' => 'admin'], function() {
    Route::get('/featured-index',[FeaturedController::class,'featuredIndex'])->name('featured.index');
    Route::get('/featured-create',[FeaturedController::class,'featuredCreate'])->name('featured.create');
    Route::post('/featured-store',[FeaturedController::class,'featuredStore'])->name('featured.store');
    Route::get('/featured-edit/{id}',[FeaturedController::class,'featuredEdit'])->name('featured.edit');
    Route::post('/featured-update',[FeaturedController::class,'featuredUpdate'])->name('featured.update');
    Route::get('/featured-delete/{id}',[FeaturedController::class,'featuredDelete'])->name('featured.delete');
});

//


//frontend

Route::get('/',[App\Http\Controllers\Frontend\MainController::class,'index'])->name('index');

