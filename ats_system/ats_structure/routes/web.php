<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\ProfileController;

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/registration', [AuthController::class, 'registration'])->name('registration');
Route::post('/registration', [AuthController::class, 'registrationPost'])->name('registration.post');
Route::get('/forgotpass', function () {
    return "Forgot";
})->name('forgotpass');
Route::get('/support', function () {
    return view('support');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::get('/messages', function () {
        return view('messages');
    })->name("messages");
    
    Route::get('/jobs', function () {
        return "Jobs";
    })->name('jobs');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('home');

    //profile related routes
    Route::prefix('profile')->group(function() {
        Route::get('/{id}', [ProfileController::class, 'show'])->name('profile');
        Route::get('/personal/{id}/edit', [ProfileController::class, 'personal'])->name('profile.edit.personal');
        Route::put('/personal/{id}', [ProfileController::class, 'personalPost'])->name('profile.edit.personal.post');
        Route::get('/about/{id}/edit', [ProfileController::class, 'about'])->name('profile.edit.about');
        Route::put('/about/{id}', [ProfileController::class, 'aboutPost'])->name('profile.edit.about.post');
        Route::get('/experience/{id}/edit', [ProfileController::class, 'experience'])->name('profile.edit.experience');
        Route::post('/experience/{id}', [ProfileController::class, 'experiencePost'])->name('profile.edit.experience.post');
        Route::put('/experience/{id}/{expId?}', [ProfileController::class, 'experiencePost'])->name('profile.edit.experience.post');
        Route::delete('/experience/{id}/{expId?}', [ProfileController::class, 'experienceDelete'])->name('profile.delete.experience.post');
        Route::get('/education/{id}/edit', [ProfileController::class, 'education'])->name('profile.edit.education');
    });

    Route::get('/profile/edit/skill', function () {
        return view('profile_edit_skill');
    });
    Route::get('/profile/edit/resume', function () {
        return view('profile_edit_resume');
    });
    Route::get('/jobs', function () {
        return view('jobboard');
    })->name('jobs');
    Route::get('/jobs/applications', function () {
        return view('job_applications');
    });
    Route::get('/jobs/add', function () {
        return view('joblisting_add');
    });
    Route::get('/jobs/view', function () {
        return view('jobview');
    });

});
