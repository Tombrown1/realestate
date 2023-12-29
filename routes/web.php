<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\Backend\AmenitiesController;
use App\Http\Controllers\Backend\PropertyTypeController;
use App\Http\Controllers\Backend\RolePermissionController;
use App\Http\Controllers\Frontend\WebsiteController;
use App\Http\Controllers\ProfileController;

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

// Route::get('/', function () {
//     return view('website.index');
// });

Route::get('/', [WebsiteController::class, 'index'])->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Admin Group Middleware

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'adminlogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'adminProfile'])->name('admin.profile');
    Route::post('/admin/profile-store', [AdminController::class, 'adminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change-password', [AdminController::class, 'adminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update-password', [AdminController::class, 'adminUpdatePassword'])->name('admin.update.password');
    
});

Route::middleware(['auth', 'role:agent'])->group(function(){
    Route::get('/agent/dashboard', [AgentController::class, 'agentDashboard'])->name('agent.dashboard');
});

Route::get('/admin/login', [AdminController::class, 'adminLogin'])->name('admin.login');


// Admin Group Middleware
Route::middleware(['auth', 'role:admin'])->group(function(){
    // All Property Type  Routes
    Route::controller(PropertyTypeController::class)->group(function(){

        Route::get('/type/all-type', 'allType')->name('all.type');
        Route::get('/type/add-type', 'addType')->name('add.type');
        Route::post('type//store-type', 'storeType')->name('store.type');
        Route::get('/type/edit-type/{id}', 'editType')->name('edit.type');
        Route::post('/type/update-type', 'updateType')->name('update.type');
        Route::get('/type/delete-type/{id}', 'deleteType')->name('delete.type');
    });

    // All Amenities Routes
    Route::controller(AmenitiesController::class)->group(function(){
        Route::get('/amenities/all-amenities', 'allAmenities')->name('all.amenities');
        Route::get('/amenities/add-amenities', 'addAmenities')->name('add.amenities');
        Route::post('/amenities/store-amenities', 'storeAmenities')->name('store.amenities');
        Route::get('/amenities/edit-amenities/{id}', 'editAmenities')->name('edit.amenities');
        Route::post('/amenities/update-amenities', 'updateAmenities')->name('update.amenities');
        Route::get('/amenities/delete-amenities/{id}', 'deleteAmenities')->name('delete.amenities');
    });
    
    // All Peermission Routes
    Route::controller(RolePermissionController::class)->group(function(){
        Route::get('permissions/all-permission', 'AllPermission')->name('all.permission');
        Route::get('permissions/add-permission', 'AddPermission')->name('add.permission');
        Route::post('permissions/store-permission', 'StorePermission')->name('store.permission');
        Route::get('permissions/edit-permission/{id}', 'EditPermission')->name('edit.permission');
        Route::post('permissions/Update-permission', 'UpdatePermission')->name('update.permission');
        Route::get('permissions/Delete-permission/{id}', 'DeletePermission')->name('delete.permission');

        Route::get('/permissions/import-permission', 'ImportPermission')->name('import.permission');
        Route::get('/export', 'Export')->name('export');
        Route::post('/import', 'Import')->name('import');

        // All Role Routes
        Route::get('role/all-role', 'AllRole')->name('all.role');
        Route::get('role/add-role', 'AddRole')->name('add.role');
        Route::post('role/store-role', 'StoreRole')->name('store.role');
        Route::get('role/edit-role/{id}', 'EditRole')->name('edit.role');
        Route::post('role/Update-role', 'UpdateRole')->name('update.role');
        Route::get('role/Delete-role/{id}', 'DeleteRole')->name('delete.role');
        
        
        Route::get('role/add-role-permission', 'AddRolePermission')->name('add_role_permission');
        Route::post('role/permission-store', 'RolePermissionStore')->name('role.permission.store');
        Route::get('role/all-role-permission', 'AllRolePermission')->name('all.role.permission');
        Route::get('admin/edit-role-permission/{id}', 'AdminEditRolePermission')->name('admin.edit.role.permission');
        Route::post('admin/update-role-permission/{id}', 'AdminUpdateRolePermission')->name('admin.update.role.permission');
        Route::get('admin/delete-role-permission/{id}', 'AdminDeleteRolePermission')->name('admin.delete.role.permission');

    });

    Route::middleware(['auth', 'role:admin'])->group(function(){
        // All Agent Routes
        Route::controller(AdminController::class)->group(function(){
            Route::get('agent/all-agent', 'AllAgent')->name('all.agent');
            Route::get('agent/add-agent', 'AddAgent')->name('add.agent');
            Route::post('agent/store-agent', 'StoreAgent')->name('store.agent');
            Route::get('agent/edit-agent/{id}', 'EditAgent')->name('edit.agent');
            Route::post('agent/update-agent', 'UpdateAgent')->name('update.agent');
            Route::get('agent/delete-agent/{id}', 'DeleteAgent')->name('delete.agent');


        // All Admin Routes
            Route::get('admin/all-admin', 'AllAdmin')->name('all.admin');
            Route::get('admin/add-admin', 'AddAdmin')->name('add.admin');
            Route::post('admin/store-admin', 'StoreAdmin')->name('store.admin');
            Route::get('admin/edit-admin/{id}', 'EditAdmin')->name('edit.admin');
            Route::post('admin/update-admin', 'UpdateAdmin')->name('update.admin');
            Route::get('admin/delete-admin/{id}', 'DeleteAdmin')->name('delete.admin');

        });



    });


});


