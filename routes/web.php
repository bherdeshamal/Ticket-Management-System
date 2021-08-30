<?php
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Models\Ticket;
use App\Models\User;
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

    Route::get('/', function () {
        return view('admin.admin-login');
    });

    Route::get('/Ticket-Management-System/employee-register', function () {
        return view('dashboard.register');
    });

    Route::get('/Ticket-Management-System/employee-login', function () {
        return view('dashboard.login');
    });

    Route::post('/Ticket-Management-System/register', [UsersController::class, 'register'])->name('Ticket-Management-System/register');
    Route::post('/Ticket-Management-System/check', [UsersController::class, 'check'])->name('Ticket-Management-System/check');

    Route::get('/Ticket-Management-System/My-Tickets', function () {
        return view('dashboard.myticket');
    });

    Route::get('/Ticket-Management-System/Tickets/Create', function () {
        return view('dashboard.create-ticket');
    });

    Route::get('/Ticket-Management-System/Tickets/Create', [UsersController::class, 'createticket'])->name('Ticket-Management-System/Tickets/Create');
    Route::post('/Ticket-Management-System/Tickets/Store', [UsersController::class, 'storeTicket'])->name('Ticket-Management-System/Tickets/Store');
    Route::get('/Ticket-Management-System/My-Tickets', [UsersController::class, 'display'])->name('Ticket-Management-System/My-Tickets');
    Route::get('/Ticket-Management-System/view-my-ticket/{id}', [UsersController::class, 'viewticket'])->name('/Ticket-Management-System/view-my-ticket'); 
    Route::post('/Ticket-Management-System/sendreply/{id}', [UsersController::class, 'comment'])->name('comment');
    Route::get('/Ticket-Management-System/UserLogout', [UsersController::class, 'UserLogout'])->name('/Ticket-Management-System/UserLogout');
  

    Route::get('/Ticket-Management-System/admin-panel', [UsersController::class, 'viewCharts'])->name('Ticket-Management-System/admin-panel');
    Route::get('/Ticket-Management-System/view-tickets', [AdminController::class, 'vieworders'])->name('Ticket-Management-System/view-tickets');
    Route::get('/Ticket-Management-System/view-ticket/{id}', [AdminController::class, 'viewDetails'])->name('Ticket-Management-System/view-ticket');
    Route::post('/Ticket-Management-System/admincheck', [AdminController::class, 'admincheck'])->name('Ticket-Management-System/admincheck');
    Route::post('/Ticket-Management-System/adminregister', [AdminController::class, 'adminregister'])->name('Ticket-Management-System/adminregister');
    Route::get('/Ticket-Management-System/admin-register', [AdminController::class, 'register'])->name('Ticket-Management-System/admin-register');
    Route::get('/Ticket-Management-System/admin-login', [AdminController::class, 'adminlogin'])->name('Ticket-Management-System/admin-login');
    Route::get('/Ticket-Management-System/AdminLogout', [AdminController::class, 'AdminLogout'])->name('/Ticket-Management-System/AdminLogout');
    Route::post('/update-tracking-status',[AdminController::class, 'trackingstatus']);
    Route::get('/view-application/delete-job/{id}',[AdminController::class, 'deleteapplication']);
    Route::get('/comments', [AdminController::class, 'comments']);
  