<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\Backend\PropertyTypeController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\ProfileController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
//Admin group middleware
Route::middleware(["auth","role:admin"])->group(function() {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::post('/admin/change/password', [AdminController::class, 'AdminUpdateChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdateChangePassword'])->name('admin.update.password');

    
});

// agent group middleware
Route::middleware(["auth","role:agent"])->group(function() {

Route::get('/agent/dashboard', [AgentController::class, 'AgentDashboard'])->name('agent.dashboard');

    
});

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');

//property type all route
Route::middleware(["auth","role:admin"])->group(function() {
    Route::controller(PropertyTypeController::class)->group(function(){
        Route::get('/all/type',"AllType")->name("all.type");
        Route::get('/add/type',"AddType")->name("add.type");
        Route::get('/edit/type/{id}',"EditType")->name("edit.type");
        Route::get('/delete/type/{id}',"DeleteType")->name("delete.type");
        Route::post('/update/type',"UpdateType")->name("update.type");
        Route::post('/store/type',"StoreType")->name("store.type");

        ////amenities route///////
        Route::get('/all/amenetie',"AllAmenetie")->name("all.amenetie");
        Route::get('/add/amenetie',"AddAmenetie")->name("add.amenetie");
        Route::post('/store/amenetie',"StoreAmenetie")->name("store.amenetie");
        Route::get('/edit/amenetie/{id}',"EditAmenetie")->name("edit.amenetie");
        Route::get('/delete/amenetie/{id}',"DeleteAmenetie")->name("delete.amenetie");
        Route::post('/update/amenetie/',"UpdateAmenetie")->name("update.amenetie");

    });
    //permission all route //
    Route::controller(RoleController::class)->group(function(){
        Route::get('/all/permission',"AllPermission")->name("all.permission");
        Route::get('/add/permission',"AddPermission")->name("add.permission");
        Route::get('/edit/permission/{id}',"EditPermission")->name("edit.permission");
        Route::get('/delete/permission/{id}',"DeletePermission")->name("delete.permission");
        Route::post('/update/permission',"UpdatePermission")->name("update.permission");
        Route::post('/store/permission',"StorePermission")->name("store.permission");
    
    });
});
