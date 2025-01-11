<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Sahifalar uchun Marshrutlar
Route::get('/',[PageController::class, 'index'])->name('/'); //Asosiy sahifas
Route::get('about',[PageController::class, 'about'])->name('about'); //Biz haqimizda sahifasi


//Ilmiy Amaliy Anjumanlar uchun Marshrutlar
Route::get('conferences', [ConferenceController ::class, 'index'])->name('conferences.index'); //Barchasini ko'rish sahifasi
Route::get('conferences/{conference}', [ConferenceController::class, 'show'])->name('conferences.show'); //Bittasini ko'rish sahifasi
Route::get('conferences/create', [ConferenceController::class, 'create'])->name('conferences.create'); //Yaratish ko'rish sahifasi
Route::post('conferences/create', [ConferenceController::class, 'store'])->name('conferences.store'); //Yaraish so'rovi
Route::get('conferences/{conference}/edit', [ConferenceController::class, 'edit'])->name('conferences.edit'); //O'zgartirish ko'rish sahifasi
Route::put('conferences/{conference}/edit', [ConferenceController::class, 'update'])->name('conferences.update'); //O'zgartirish so'rovi
Route::delete('conferences/{conference}/delete', [ConferenceController::class, 'delete'])->name('conferences.delete'); //O'chirish so'rovi

//Maqolala uchun Marshrutlar
Route::get('articles', [ArticleController::class, 'index'])->name('articles.index'); //Barchasini ko'rish sahifasi
Route::get('articles/create', [ArticleController::class, 'create'])->name('articles.create'); //Yaratish ko'rish sahifasi
Route::post('articles/create', [ArticleController::class, 'store'])->name('articles.store'); //Yaraish so'rovi
Route::get('articles/{articles}/edit', [ConferenceController::class, 'edit'])->name('conferences.edit'); //O'zgartirish ko'rish sahifasi
Route::put('articles/{articles}/edit', [ConferenceController::class, 'update'])->name('conferences.update'); //O'zgartirish so'rovi
Route::delete('articles/{articles}/delete', [ConferenceController::class, 'delete'])->name('conferences.delete'); //O'chirish so'rovi

// //Admin panel uchun marshrutlar
// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
//     Route::post('/admin/articles/approve/{id}', [AdminController::class, 'approve'])->name('admin.articles.approve');
// });
// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin/pending-articles', [AdminController::class, 'pendingArticles'])->name('admin.pendingArticles');
//     Route::post('/admin/approve-article/{id}', [AdminController::class, 'approveArticle'])->name('admin.approveArticle');
// });