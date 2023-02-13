<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
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

// Route::get('/admin', function () {
//     return view('welcome');
// });
// home
Route::get('/',[MyController::class,'home']);  

Route::get('/about',[MyController::class,'about']);  

Route::get('/Football',[MyController::class,'football']);  

Route::get('/cricket',[MyController::class,'cricket']); 

Route::get('/volleyball',[MyController::class,'volleyball']); 
Route::get('/carrom',[MyController::class,'carrom']); 
// football

Route::get('/registration/event',[MyController::class,'registration']);
Route::post('/registration/create',[MyController::class,'registrationStore'])->name('event.create');

//admin_team
Route::get('/admin_team',[MyController::class,'admin_teams']);
Route::get('/team_form',[MyController::class,'teamForm']);
Route::post('/team/create',[MyController::class,'teamStore'])->name('add.create');
Route::get('/team/edit/{id}',[MyController::class,'editStore']);
Route::post('/team/update/{id}',[MyController::class,'updateStore']);
Route::get('/team/delete/{id}',[MyController::class,'deleteStore']);

//admin_match
Route::get('/admin_match',[MyController::class,'admin_match']);
Route::get('/match_form',[MyController::class,'matchForm']);
Route::post('/match/create',[MyController::class,'matchStore'])->name('add.create1');
Route::get('/match/edit/{id}',[MyController::class,'editMStore']);
Route::post('/match/update/{id}',[MyController::class,'updateMStore']);
Route::get('/match/delete/{id}',[MyController::class,'deleteMStore']);
//admin_match upcomming
Route::get('/admin_match_upcomming',[MyController::class,'admin_match_upcomming']);
Route::get('/match_upcomming_form',[MyController::class,'matchUpcommingForm']);
Route::post('/matchUpcomming/create',[MyController::class,'matchUpcommingStore'])->name('add.create11');
Route::get('/matchUpcomming/edit/{id}',[MyController::class,'editMUStore']);
Route::post('/matchUpcomming/update/{id}',[MyController::class,'updateMUStore']);
Route::get('/matchUpcomming/delete/{id}',[MyController::class,'deleteMUStore']);



//Football score admin panel........
Route::get('/football_score',[MyController::class,'football_score']);
Route::get('/footballscore_form',[MyController::class,'footballscoreForm']);
Route::post('/footballscore/create',[MyController::class,'footballscoreStore'])->name('add.create2');
Route::get('/footballscore/edit/{id}',[MyController::class,'editFStore']);
Route::post('/footballscore/update/{id}',[MyController::class,'updateFStore']);
Route::get('/footballscore/delete/{id}',[MyController::class,'deleteFStore']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin', function () {
    return view('adminDashboard');
})->middleware(['auth'])->name('adminDashboard');


require __DIR__.'/auth.php';