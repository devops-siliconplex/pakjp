<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleTrackingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/** start Auth Routes **/
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

/** end Auth Routes **/

/************************* start Website Routes ******************************/
Route::get('/', function () {
    return redirect('home');
});

Route::get('home', function () {
    return view('home');
});
Route::get('board', function () {
    return view('board');
});
Route::get('instruction-for-authors', function () {
    return view('instructions');
});

Route::get('editorial-board', function () {
    return view('editorial_board');
});
Route::get('peer-review', function (){
    return view('peer_review');
});
Route::get('conflict-of-interest', function (){
    return view('conflict_of_interes');
});
Route::get('appeals-url', function (){
    return view('appeals_url');
});
Route::get('publication-misconduct', function (){
    return view('publication_misconduct');
});
Route::get('complain-policy', function (){
    return view('complain_policy'); 
});

Route::get('authorship-criteria', function () {
    return view('authorship_criteria');
});
Route::get('advertising-policy', function (){
    return view('advertising_policy');
});
Route::get('current-issue', [ArticleController::class, 'current']);

Route::get('previous-issues', [ArticleController::class, 'previous']);
Route::get('article-search', [ArticleController::class, 'articleByCategory']);
Route::post('stats-ajax', [ArticleController::class, 'stats_ajax']);
Route::post('implement-ajax', [ArticleController::class, 'implement_ajax']);
Route::get('search-article', function () {
    return view('search_article');
});
Route::post('article-tracking', [ArticleController::class, 'oursearch'])->name('oursearch');


Route::get('submission', function () {
    return view('submission');
});

Route::get('article-tracking', function () {
    return view('tracking');
});
Route::get('contact-us', function () {
    return view('contact_us');
});
Route::post('submission-form', [ArticleController::class, 'submission_form'])->name('submission_form');
Route::get('single-article', [ArticleController::class, 'single_article']);

/******************************** end Website Routes **********************/

/******************************** start Admin Routes ***************************/
Route::group(['middleware' => ['auth']],function(){
    Route::get('article/create',[ArticleController::class,'create']);
    Route::post('article/store',[ArticleController::class,'store'])->name('article.store');
    Route::get('article/edit/{id}',[ArticleController::class,'edit']);
    Route::get('article/view/{id}',[ArticleController::class,'view']);
    Route::get('article/delete/{id}',[ArticleController::class,'delete']);
    Route::post('article/update/{id}',[ArticleController::class,'update'])->name('article.update');
    Route::get('articles',[ArticleController::class,'index'])->name('articles.index');

    Route::get('article_tracking/create',[ArticleTrackingController::class,'create']);
    Route::post('article_tracking/store',[ArticleTrackingController::class,'store'])->name('article_tracking.store');
    Route::get('article_tracking/edit/{id}',[ArticleTrackingController::class,'edit']);
    Route::get('article_tracking/view/{id}',[ArticleTrackingController::class,'view']);
    Route::get('article_tracking/delete/{id}',[ArticleTrackingController::class,'delete']);
    Route::post('article_tracking/update/{id}',[ArticleTrackingController::class,'update'])->name('article_tracking.update');
    Route::get('article_tracking',[ArticleTrackingController::class,'index'])->name('article_tracking.index');
    Route::get('set_data',[ArticleTrackingController::class,'setData']);
    
});
/****************************** End Admin Routes *************************************/

