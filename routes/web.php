<?php

use App\Http\Controllers\Controller;
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
//Portfolio Accueil
Route::get('/', [Controller::class, 'home'])->name('home');

//create Profil
Route::get('/create-profil', [Controller::class, 'showCreateProfil'])->name('createProfil.show');
Route::post('/create-profil', [Controller::class, 'createProfil'])->name('createProfil.post');

//update Profil
Route::get('/update-profil', [Controller::class, 'showUpdateProfil'])->name('updateProfil.show');
Route::post('/update-profil', [Controller::class, 'updateProfil'])->name('updateProfil.post');

//delete Profil
Route::post('/delete-profil', [Controller::class, 'deleteProfil'])->name('deleteProfil.post');


Route::get('/add-experience', [Controller::class, 'addExperience'])->name('addExperience.show');

Route::get('/add-competence', [Controller::class, 'addCompetence'])->name('addCompetence.show');

Route::get('/add-formation', [Controller::class, 'addFormation'])->name('addFormation.show');

//Add Certification
Route::get('/add-certification', [Controller::class, 'addShowCertification'])->name('addCertification.show');
Route::post('/add-certification', [Controller::class, 'addCertification'])->name('addCertification.post');

//Update Certification
Route::get('/update-certification/{id}', [Controller::class, 'updateShowCertification'])->name('updateCertification.show');
Route::post('/update-certification/{id}', [Controller::class, 'updateCertification'])->name('updateCertification.post');

//delete Certification
Route::post('/delete-certification/{id}', [Controller::class, 'deleteCertification'])->name('deleteCertification.post');

Route::get('/list', [Controller::class, 'list'])->name('list.show');

Route::get('/login', [Controller::class, 'loginShow'])->name('login.show');
Route::post('/login', [Controller::class, 'login'])->name('login.post');
Route::post('/logout', [Controller::class, 'logout'])->name('logout');