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

Route::get('/events', [EventsController::class, 'viewEvent']);

Route::get('/admin/edit-event/{eventId}', [Eventscontroller::class, 'showEvent'])->name('showEvent')->middleware('auth');
Route::post('/admin/edit-event/{eventId}', [Eventscontroller::class, 'UpdateEvent'])->name('UpdateEvent')->middleware('auth');

Route::get('/admin/delete-event/{eventId}', [Eventscontroller::class, 'deleteEvent'])->middleware('auth')->name("deleteEvent");

Route::post('/create-ticket', [TicketsController::class, 'createTicket'])->name('createTicket');

Route::post('/send-contact', [PagesController::class, 'sendContact'])->name('sendContact');

Route::get('/admin/add-event', [Eventscontroller::class, 'showAddEvent'])->middleware('auth')->name('showEvent');

Route::post('/admin/add-event', [Eventscontroller::class, 'addEvent'])->middleware('auth')->name('addEvent');

// show Admin panel
Route::get('/admin/panel', [PagesController::class, 'viewAdmin'])->middleware('auth');
require __DIR__.'/auth.php';