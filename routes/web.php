<?php

use App\Http\Controllers\Eventscontroller;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TicketsController;
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

Route::get('/', [PagesController::class, 'viewHome'])->name('home');

Route::get('/over-ons', [PagesController::class, 'viewAboutUs'])->name('aboutUs');

Route::get('/contact', [PagesController::class, 'viewContact'])->name('contact');

Route::get('/ticket', [TicketsController::class, 'viewTicket'])->name('listTickets')->middleware('auth');

Route::post('/create-ticket', [TicketsController::class, 'createTicket'])->name('createTicket');

Route::post('/send-contact', [PagesController::class, 'sendContact'])->name('sendContact');

Route::get('/admin/add-event', [Eventscontroller::class, 'showAddEvent'])->middleware('auth')->name('showEvent');

Route::post('/admin/add-event', [Eventscontroller::class, 'addEvent'])->middleware('auth')->name('addEvent');

require __DIR__.'/auth.php';