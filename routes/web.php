<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AllproductController;
use App\Http\Controllers\Admin\ApdescriptionController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BannerimageController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\FeaturedController;
use App\Http\Controllers\Admin\LogoController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\ProductController;
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

//for-product

Route::group(['prefix' => 'admin'], function() {
    Route::get('/product-index',[ProductController::class,'productIndex'])->name('product.index');
    Route::get('/product-create',[ProductController::class,'productCreate'])->name('product.create');
    Route::post('/product-store',[ProductController::class,'productStore'])->name('product.store');
    Route::get('/product-edit/{id}',[ProductController::class,'productEdit'])->name('product.edit');
    Route::post('/product-update',[ProductController::class,'productUpdate'])->name('product.update');
    Route::get('/product-delete/{id}',[ProductController::class,'productDelete'])->name('product.delete');
});
//

//for-about

Route::group(['prefix' => 'admin'], function() {
    Route::get('/about-index',[AboutController::class,'aboutIndex'])->name('about.index');
    Route::get('/about-create',[AboutController::class,'aboutCreate'])->name('about.create');
    Route::post('/about-store',[AboutController::class,'aboutStore'])->name('about.store');
    Route::get('/about-edit/{id}',[AboutController::class,'aboutEdit'])->name('about.edit');
    Route::post('/about-update',[AboutController::class,'aboutUpdate'])->name('about.update');
    Route::get('/about-delete/{id}',[AboutController::class,'aboutDelete'])->name('about.delete');
});
//

//forApdescription
Route::group(['prefix' => 'admin'], function() {
    Route::get('/apdescription-index',[ApdescriptionController::class,'apdescriptionIndex'])->name('apdescription.index');
    Route::get('/apdescription-create',[ApdescriptionController::class,'apdescriptionCreate'])->name('apdescription.create');
    Route::post('/apdescription-store',[ApdescriptionController::class,'apdescriptionStore'])->name('apdescription.store');
    Route::get('/apdescription-edit/{id}',[ApdescriptionController::class,'apdescriptionEdit'])->name('apdescription.edit');
    Route::post('/apdescription-update',[ApdescriptionController::class,'apdescriptionUpdate'])->name('apdescription.update');
    Route::get('/apdescription-delete/{id}',[ApdescriptionController::class,'apdescriptionDelete'])->name('apdescription.delete');
});

//

//for Allproducts

Route::group(['prefix' => 'admin'], function() {
    Route::get('/allproduct-index',[AllproductController::class,'allproductIndex'])->name('allproduct.index');
    Route::get('/allproduct-create',[AllproductController::class,'allproductCreate'])->name('allproduct.create');
    Route::post('/allproduct-store',[AllproductController::class,'allproductStore'])->name('allproduct.store');
    Route::get('/allproduct-edit/{id}',[AllproductController::class,'allproductEdit'])->name('allproduct.edit');
    Route::post('/allproduct-update',[AllproductController::class,'allproductUpdate'])->name('allproduct.update');
    Route::get('/allproduct-delete/{id}',[AllproductController::class,'allproductDelete'])->name('allproduct.delete');
});
//

//for contact

Route::group(['prefix' => 'admin'], function() {
    Route::get('/contact-index',[ContactController::class,'contactIndex'])->name('contact.index');
    Route::get('/contact-create',[ContactController::class,'contactCreate'])->name('contact.create');
    Route::post('/contact-store',[ContactController::class,'contactStore'])->name('contact.store');
    Route::get('/contact-edit/{id}',[ContactController::class,'contactEdit'])->name('contact.edit');
    Route::post('/contact-update',[ContactController::class,'contactUpdate'])->name('contact.update');
    Route::get('/contact-delete/{id}',[ContactController::class,'contactDelete'])->name('contact.delete');
});

//

//for client

Route::group(['prefix' => 'admin'], function() {
    Route::get('/client-index',[ContactController::class,'clientIndex'])->name('client.index');
    Route::get('/client-create',[ContactController::class,'clientCreate'])->name('client.create');
    Route::post('/client-store',[ContactController::class,'clientStore'])->name('client.store');
    Route::get('/client-edit/{id}',[ContactController::class,'clientEdit'])->name('client.edit');
    Route::post('/client-update',[ContactController::class,'clientUpdate'])->name('client.update');
    Route::get('/client-delete/{id}',[ContactController::class,'clientDelete'])->name('client.delete');
});



//frontend

Route::get('/',[App\Http\Controllers\Frontend\MainController::class,'index'])->name('index');

