<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
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
    return Inertia::render('Home');
});

Route::get('/contacto', function() {
    return inertia::render('Contact');
});

Route::get('/nosotros', function() {
    return inertia::render('Nosotros');
});

Route::get('/usuarios', function() {
    return Inertia::render('User', [
        'usuarios' => User::select('id','name','email')
        ->with('subjects')
        ->get(),

    ]);
    /*return User::with('subjects')
    ->select('id','name','email')
    ->get();*/
});