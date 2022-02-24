<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
Route::get('', [PageController::class, 'viewBookList'])->name('home');

Route::get('/Fiction', [PageController::class, 'viewFictionBook'])->name('fictionbooks');

Route::get('/NonFiction', [PageController::class, 'viewNonFictionBook'])->name('nonfictionbooks');

Route::get('/Language', [PageController::class, 'viewLanguageBook'])->name('languagebooks');

Route::get('/Children', [PageController::class, 'viewChildrenBook'])->name('childrenbooks');

Route::get('/Science', [PageController::class, 'viewScienceBook'])->name('sciencebooks');

Route::get('/Computer', [PageController::class, 'viewComputerBook'])->name('computerbooks');

Route::get('/Comics', [PageController::class, 'comics'])->name('comics');

Route::get('/Contact', [PageController::class, 'contactPerson'])->name('contact');

Route::get('/BookDetails/{title}', [PageController::class, 'viewBookDetail'])->name('bookdetails');
