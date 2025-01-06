<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Session;

Route::get('/', [HomeController::class, 'index']);
Route::get('/', function () {
    $locale = Session::get('locale', 'az');
    return redirect($locale);
});

Route::get('locale/{locale}', function ($locale) {
    if (in_array($locale, ['ru', 'en', 'az'])) {
        Session::put('locale', $locale);
        App::setLocale($locale);
    }
    return Redirect::back();
});

Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'ru|en|az']], function () {
    Route::get('/', function ($locale) {
        App::setLocale($locale);
        return view('home');
    });
});
