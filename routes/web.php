<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\ConversationConstroller;
use App\Http\Controllers\CoverController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\FriendSuggestionController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Profile_picsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Chat;
use App\Models\Cover;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/user/reg', [UserController::class, 'User_details'])->name('registration');
Route::post('/user/reg', [UserController::class, 'reg'])->name('open_login');
Route::get('/user/login', [UserController::class, 'login'])->name('loginpage');
Route::post('/user/login', [UserController::class, 'login_page'])->name('login');
//* route for introduction before login *//
Route::get('/intro/page', [UserController::class, 'intro'])->name('intoduction');
//* route for profile_pics*//
Route::get('/user/profilepics', [UserController::class, 'profile_pics'])->name('profile');
Route::post('/user/profilepics', [UserController::class, 'pics'])->name('picture');
Route::get('hold/route', [UserController::class, 'hold_pics'])->name('route');

Route::get('conversation', [MessageController::class, 'message'])->name('Sent');
Route::post('conversation/{id}', [MessageController::class, 'store'])->name('send');
Route::get('/chat', [ChatController::class, 'conversations'])->name('conversations');


Route::middleware(['auth'])->group(function () {
    Route::get('/suggestions', [FriendSuggestionController::class, 'suggestions'])->name('suggestions.show');
    Route::get('/suggestions/add-friend', [FriendSuggestionController::class, 'addAsFriend'])->name('suggestions.add-as-friend');

    Route::get('/add/friend/{id}', [FriendController::class, 'addFriend'])->name('add_friend');
    Route::get('request/all', [FriendController::class, 'display_allfriend'])->name('show_friends');
});
//**admin-guide */
Route::middleware(['admin-guard', 'auth'])->group(function () {});
