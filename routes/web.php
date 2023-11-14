<?php

use App\Livewire\SuperAdmin\AddRole;
use App\Livewire\AdminRegister\AdminRegister;
use App\Livewire\BasicData\Manufacturers\AddManufacturer;
use App\Livewire\BasicData\Manufacturers\EditManufacturer;
use App\Livewire\BasicData\Manufacturers\ManufacturersTable;
use App\Livewire\Users;
use App\Livewire\HomePage;
use App\Livewire\EditUserForm;
use App\Livewire\Errors\NotAuthorized;
use App\Livewire\SuperAdmin\AddIt;
use App\Livewire\SuperAdmin\Roles;
use App\Livewire\SuperAdmin\EditAdmin;
use App\Livewire\SuperAdmin\EditIt;
use App\Livewire\SuperAdmin\ItLocalDep;
use App\Livewire\SuperAdmin\MvrSuperAdminDashboard;
use App\Livewire\SuperAdmin\StpSuperAdminDashboard;
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

// SUPERADMIN START
Route::get('/users', Users::class)->name('users');
Route::get('/user/{user}/edit', EditUserForm::class)->name('edituser');
Route::get('/roles', Roles::class)->name('roles');
Route::get('/role/add', AddRole::class)->name('role.add');


Route::get('/superadmin/dashboard',SuperAdminDashboard::class)->name('superadmin.dashboard');
Route::get('/mvr/superadmin/dashboard',MvrSuperAdminDashboard::class)->name('mvrsuperadmin.dashboard');
Route::get('/stp/superadmin/dashboard',StpSuperAdminDashboard::class)->name('stpsuperadmin.dashboard');

Route::get('/register/admin/', AdminRegister::class)->name('admin.register');
Route::get('/admin/{user}/edit', EditAdmin::class)->name('edit.admin');

Route::get('/superadmin/it', ItLocalDep::class)->name('inspekciski.tela');

Route::get('/it/{localDepartment}/edit', EditIt::class)->name('edit.it');
Route::get('/it/create', AddIt::class)->name('add.it');

// SUPERADMIN END

// Basic Data Routes
Route::get('/it/manufacturers/all', ManufacturersTable::class)->name('manufacturers.all');
Route::get('/it/manufacturers/add', AddManufacturer::class)->name('manufacturer.add');
Route::get('/it/manufacturers/{manufacturer}/edit', EditManufacturer::class)->name('manufacturer.edit');



require __DIR__.'/auth.php';
