<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\GalleryController;

use App\Http\Controllers\prelimRosaupanController;

use App\Http\Controllers\PrelimController;

use App\Http\Controllers\EventController;




// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hehe', function () {
//     return view('lawrence');
// });


Route::get('/', function () {
    return view('welcome');
});
















// call view tru controller
Route::get('/calculator', [CalculatorController::class,'showCalculatorPage']); 
Route::post('/calculator', [CalculatorController::class,'calculate'])->name('callcalculate');




// route sa dashboard
Route::get('/index', function () {
    return view('mypages.index');
})->name('index');

Route::get('/gallery', function () {
    return view('mypages.gallery');
})->name('gallery');

Route::get('/services', function () {
    return view('mypages.services');
})->name('services');











// route sa dashboard
Route::get('/1', function () {
    return view('welcome');
});


// Route::get('/dashboard', function() {
//     return view("prelim-rosaupan.dashboard");
// }) -> name('mainPage') ;



// Route::get('/home', function() {
//     return view("prelim-rosaupan.home");
// }) -> name('mainPage') ;

// Route::get('/addition', [PrelimController::class,'showAdditionPage'],function() {
//     return view("prelim-rosaupan.addition");
// }) -> name('add') ;

// Route::get('/plus', [PrelimController:: class,'calculateAdd']
// )->name('adds');

// Route::get('/subtraction',[PrelimController::class,'showSubtractionPage'], function() {
//     return view("prelim-rosaupan.subtraction");
// }) -> name('minuss') ;

// Route::get('/minus', [PrelimController:: class,'calculateSub']
// )->name('post');

// Route::post('/multiplication',[PrelimController::class,'showMultiplicationPage'], function() {
//     return view("prelim-rosaupan.multiplication");
// }) -> name('multiply') ;

// Route::post('/times', [PrelimController:: class,'calculateMul']
// )->name('mul');

// Route::get('/divide', [PrelimController:: class,'calculateDiv']
// )->name('div');

// Route::get('/division',[PrelimController::class,'showDivisionPage'], function() {
//     return view("prelim-rosaupan.division");
// }) -> name('divs') ;






// route sa dashboard
// Route::get('/showLogin1', function () {
//     return view('mymiddlewaredemo.signupdesign');
// })-> name('signup_Form') 



Route::get('/showLogin', function () {
    return view('mymiddlewaredemo.login');
})-> name('login_Form') ;

Route::post('/showLogin', function () {
    return view('mymiddlewaredemo.login');
})-> middleware('login.middleware') ;

Route::get('/showdashboard', function () {
    return view('mymiddlewaredemo.dashboard');
})-> name('gotodashboard') ;









// design route


Route::get('/', function () {
    return view('design.logindesign');
})->name('login-form');

// Route::get('/login-form', function () {
//     return view('design.logindesign');
// })->name('login-form');

Route::get('/signup-form', function () {
    return view('design.register');
})->name('signup-form');

Route::get('/dashboard', function () {
    return view('design.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function(){
    //ADMIN ROUTES
    Route::middleware(['role:admin'])->prefix('admin')->name('admin.')->group(function(){
       
       
        //route1
        Route::get('/main-dashboard', function () {
            return view('design.dashboard');
        })->name('main-dashboard');

         //route2
         Route::controller(EventController::class)->group(function (){
            route::post('/add_event', 'add_event')->name('add_event');
        });
        
    });




    //REGISTRAR ROUTES
    Route::middleware(['role:registrar'])->prefix('registrar')->name('registrar.')->group(function(){
       
        //route1
        Route::get('/main-dashboard', function () {
            return view('design.dashboard');
        })->name('main-dashboard');

        //route2
        
    });
        //FACULTY ROUTES
    Route::middleware(['role:faculty'])->prefix('faculty')->name('faculty.')->group(function(){

        Route::get('/main-dashboard', function () {
            return view('design.dashboard');
        })->name('main-dashboard');
        
    });

    });






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';





?>
