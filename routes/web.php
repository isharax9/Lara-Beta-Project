<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\DB;

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
    // return view('welcome');
    //fetch all users 
<<<<<<< HEAD
    // $users = DB::select("SELECT * FROM users");
=======
    $users = DB::select("SELECT * FROM users");
>>>>>>> 243e35b9ad0a1187faba8381bd999046897fc66b
    
    //create new user
    // $user = DB::insert('insert into users (username,email,password) VALUES(?,?,?)', ['mac', 'mac1@gmail.com', 'password']);
    
    //update user
    //$user = DB::update("update users set email='new1mail@gmail.com' WHERE username='mac'");

    //delete user
<<<<<<< HEAD
    // $user = DB::delete("delete from users where id=1");


    // dd($users);
=======
    $user = DB::delete("delete from users where id=1");


    dd($users);
>>>>>>> 243e35b9ad0a1187faba8381bd999046897fc66b
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
