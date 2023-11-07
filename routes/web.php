<?php

use App\Livewire\AddRole;
use App\Livewire\Users;
use App\Livewire\HomePage;
use App\Livewire\EditUserForm;
use App\Livewire\Errors\NotAuthorized;
use App\Livewire\Roles;
use App\Livewire\SuperAdmin\SuperAdminDashboard;
use App\Models\Role;
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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Route::view('errors.not-authorized', 'not-authorized');

Route::get('/notauthorised', NotAuthorized::class)->name('not.authorised');

Route::get('/homepage', HomePage::class)->name('homepage');
Route::get('/users', Users::class)->name('users');
Route::get('/user/{user}/edit', EditUserForm::class)->name('edituser');
Route::get('/roles', Roles::class)->name('roles');
Route::get('/role/add', AddRole::class)->name('role.add');


Route::get('/superadmin/dashboard',SuperAdminDashboard::class)->name('superadmin.dashboard');

require __DIR__.'/auth.php';
