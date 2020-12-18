<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfilleController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/alert',function (){
    return redirect()->route('home')->with('info','Welcome');
});

Route::get('/signup', [AuthController::class, 'getSignup'])->name('signup');
Route::post('/signup', [AuthController::class, 'postSignup']);


Route::get('/signin', [AuthController::class, 'getSignIn'])->name('signin');
Route::post('/signin', [AuthController::class, 'postSignIn']);

Route::get('/signout', [AuthController::class, 'getSignOut'])->name('signout');


Route::get('/profile', [ProfilleController::class, 'getProfile'])->name('profile');

Route::post('/editName', [ProfilleController::class, 'postFullNameGenderPhoto']);

Route::post('/editUdastak', [ProfilleController::class, 'postUdastak']);

Route::post('/editSchoolCerteficate', [ProfilleController::class, 'postSchCer']);

Route::post('/editENTCerteficate', [ProfilleController::class, 'postENTCer']);


Route::post('/editDocFiles', [ProfilleController::class, 'postOtherDoc']);

Route::get('/viewUdastak/{id}',[DocumentController::class,'viewUdastak']);

Route::get('/viewOther',[DocumentController::class,'viewOther']);

Route::get('/download/{file}',[DocumentController::class,'download']);


Route::get('/viewSchCer/{id}',[DocumentController::class,'viewScholCer']);

Route::get('/viewEnt/{id}',[DocumentController::class,'viewEnt']);
//DECANAT
Route::get('/admin',[AdminController::class,'admin'])->name('admin');


Route::post('/signInAdmin',[AdminController::class,'signIn']);

Route::get('/decan',[AdminController::class,'decan'])->name('decan');
Route::get('/isChecked',[AdminController::class,'isChecked'])->name('isChecked');
Route::get('/unChecked',[AdminController::class,'unChecked'])->name('unChecked');
Route::get('/viewStudent/{id}',[AdminController::class,'viewStudent']);
Route::get('/viewProfession/{id}',[AdminController::class,'viewProfession']);
Route::post('/checkedTrue',[AdminController::class,'checkedTrue']);

Route::post('/feedback',[AdminController::class,'feedback']);

Route::get('/professions',[AdminController::class,'professions'])->name('professions');
Route::get('/add',[AdminController::class,'addPage'])->name('add');


Route::post('/addProfession',[AdminController::class,'addProfession']);
Route::post('/editProfession',[AdminController::class,'editProfession']);
Route::post('/delete',[AdminController::class,'delete']);
// END
Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');
Route::get('/choice', [ProfilleController::class, 'choice'])->name('choice');
Route::get('/status', [ProfilleController::class, 'status'])->name('status');
Route::get('/messages', [ProfilleController::class, 'messages'])->name('messages');
Route::get('/results', [HomeController::class, 'results'])->name('results');



//Ajax
Route::get('/get_profs', [ProfilleController::class, 'get_profs']);
Route::post('/save_choices', [ProfilleController::class, 'save_choices']);
