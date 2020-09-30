<?php

use App\Http\Livewire\Tahapan\Analisis\Index as AnalisisIndex;
use App\Http\Livewire\Tahapan\PihakTerkait\Create as PihakTerkaitCreate;
use App\Http\Livewire\Tahapan\PihakTerkait\Index as PihakTerkaitIndex;
use App\Http\Livewire\Tahapan\Proposal\Create;
use App\Http\Livewire\Tahapan\Proposal\Index;
use App\Http\Livewire\Tahapan\Survey\Create as SurveyCreate;
use App\Http\Livewire\Tahapan\Survey\Index as SurveyIndex;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'tahapan'], function () {
        Route::get('tahapan-1', Index::class)->name('tahapan-1.index');
        Route::get('tahapan-1/create', Create::class)->name('tahapan-1.create');
        Route::get('anggota-terkait', PihakTerkaitIndex::class)->name('pihak-terkait.index');
        Route::get('anggota-terkait/create', PihakTerkaitCreate::class)->name('pihak-terkait.create');
        Route::get('survey', SurveyIndex::class)->name('survey.index');
        Route::get('survey/create', SurveyCreate::class)->name('survey.create');
        Route::get('analisis', AnalisisIndex::class)->name('analisis.index');
    });
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
