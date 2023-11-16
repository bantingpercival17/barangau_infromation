<?php

use App\Http\Livewire\Material;
use App\Http\Livewire\BarangayProfile;
use App\Http\Livewire\BarangayInformation;
use App\Http\Livewire\Page\HomePageView;
use App\Models\User;
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

Route::get('/', function () {
    $user = User::all();
    if (count($user) > 0) {
        return redirect('/home');
    } else {
        return redirect('/register');
    }
});
Route::get('/home', HomePageView::class)->name('home');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/material', Material::class)->name('material');
    Route::get('/registration', BarangayInformation::class)->name('barangay-registration');
    Route::get('/registration/profile/{data}', BarangayProfile::class)->name('barangay-profile');
});
