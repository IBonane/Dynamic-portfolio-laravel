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

Route::get('/', [Controller::class, 'home'])->name('home');

Route::get('/create-profil', [Controller::class, 'createProfil'])->name('createProfil.show');

Route::get('/add-experience', [Controller::class, 'addExperience'])->name('addExperience.show');

Route::get('/add-competence', [Controller::class, 'addCompetence'])->name('addCompetence.show');

Route::get('/add-formation', [Controller::class, 'addFormation'])->name('addFormation.show');

Route::get('/add-certification', [Controller::class, 'addCertification'])->name('addCertification.show');

Route::get('/list', [Controller::class, 'list'])->name('list.show');