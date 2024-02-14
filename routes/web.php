<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ViewDownloadController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\DeleteController;

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

Route::get('/',[HomeController::class,'homepage']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route:: get('/home',[HomeController::class,'index']);
// Route:: get('/forms',[HomeController::class,'tables']);
Route:: get('/home',[HomeController::class,'dev1homepage']);
// Route::get('/tables/{id}', [InsertController::class, 'test']);
// Route::post('reservation-accept/{id}', [InsertController::class,'acceptReservation'])->name('reservation.accept');
// Route:: get('/tables',[HomeController::class,'developer1']);
// Route::post('/allocate-row', 'InsertController@allocateRow');
// Route:: get('/forms',[HomeController::class,'forms']);
// Route:: get('/forms',[InsertController::class,'insert'])->middleware(['web', 'admin']);
Route:: get('/requests',[InsertController::class,'formdropdown'])->middleware(['web', 'admin']);
Route:: post('/add_post',[InsertController::class,'add_post'])->middleware(['web', 'admin']);
Route:: post('/requests',[InsertController::class,'add_post_dev1'])->middleware(['web', 'admin']);
Route:: post('/viewuser/{id}',[InsertController::class,'add_post_user_dev1']);
Route::get('/viewuser/{id}', [InsertController::class, 'showViewUser'])->name('showViewUser');
Route::put('/mark-as-complete/{id}', [InsertController::class, 'markAsComplete']);
Route::put('/mark-as-incomplete/{id}', [InsertController::class, 'markAsInComplete']);
// Download files
Route:: get('/download/{filename}',[ViewDownloadController::class,'download']);

// Edit Files
Route:: get('/edit/{id}',[EditController::class,'edit'])->middleware(['web', 'admin']);
Route:: post('/edit/{id}',[EditController::class,'update'])->middleware(['web', 'admin']);

// Delete Files
Route:: get('/delete/{id}',[DeleteController::class,'delete'])->middleware(['web', 'admin']);
// View Files for admin
Route:: get('/view/{id}',[ViewDownloadController::class,'view'])->middleware(['web', 'admin']);
Route::get('/export-pdf/{id}', [ViewDownloadController::class, 'exportToPdf'])->middleware(['web', 'admin']);
// View Files for user
Route:: get('/viewuser/{id}',[ViewDownloadController::class,'viewuser']);
Route::get('/export-pdf-user/{id}', [ViewDownloadController::class, 'exportToPdfuser']);

Route:: get('/contact',[ContactController::class,'show'])->name('usercontact.show');
Route:: post('/contact',[ContactController::class,'send'])->name('usercontact.send');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/add_customer',[InsertController::class,'add_customer']);
Route::post('/add_customer',[InsertController::class,'add_new_customer']);



// Route::get('/request',[InsertController::class,'request']);
// Route::post('/request',[InsertController::class,'add_request']);
// Route::get('/request/{documentId}/blob/{blobNumber}', [InsertController::class,'getBlobData'])->name('request.blob');
