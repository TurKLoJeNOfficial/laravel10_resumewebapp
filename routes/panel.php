<?php

use App\Http\Controllers\Panel\AdminController;
use App\Http\Controllers\Panel\CertificateController;
use App\Http\Controllers\Panel\EducationController;
use App\Http\Controllers\Panel\ExperienceController;
use App\Http\Controllers\Panel\LanguageController;
use App\Http\Controllers\Panel\PasswordController;
use App\Http\Controllers\Panel\ProjectController;
use App\Http\Controllers\Panel\ReferenceController;
use App\Http\Controllers\Panel\SettingController;
use App\Http\Controllers\Panel\SkillController;
use App\Http\Controllers\Panel\UserController;
use Illuminate\Support\Facades\Route;

// Fallback Route
Route::fallback(function () {
    return redirect()->route('dashboard');
});

// Admin Panel Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/settings', [AdminController::class, 'settings'])->name('settings');

    //Skills

    Route::get('/skills', [SkillController::class, 'index'])->name('skills');
    Route::get('/skills/{id}/edit', [SkillController::class, 'edit'])->name('skill.edit');
    Route::put('/skills/{id}', [SkillController::class, 'update'])->name('skill.update');
    Route::delete('/skills/{id}', [SkillController::class, 'destroy'])->name('skill.destroy');
    // Add Skill Routes
    Route::get('/skills/create', [SkillController::class, 'create'])->name('skill.create');
    Route::post('/skills', [SkillController::class, 'store'])->name('skill.store');

    //Languages

    Route::get('/languages', [LanguageController::class, 'index'])->name('languages');
    Route::get('/languages/{id}/edit', [LanguageController::class, 'edit'])->name('language.edit');
    Route::put('/languages/{id}', [LanguageController::class, 'update'])->name('language.update');
    Route::delete('/languages/{id}', [LanguageController::class, 'destroy'])->name('language.destroy');
    // Add Language Routes
    Route::get('/languages/create', [LanguageController::class, 'create'])->name('language.create');
    Route::post('/languages', [LanguageController::class, 'store'])->name('language.store');

    //References

    Route::get('/references', [ReferenceController::class, 'index'])->name('references');
    Route::get('/references/{id}/edit', [ReferenceController::class, 'edit'])->name('reference.edit');
    Route::put('/references/{id}', [ReferenceController::class, 'update'])->name('reference.update');
    Route::delete('/references/{id}', [ReferenceController::class, 'destroy'])->name('reference.destroy');
    // Add Reference Routes
    Route::get('/references/create', [ReferenceController::class, 'create'])->name('reference.create');
    Route::post('/references', [ReferenceController::class, 'store'])->name('reference.store');

    // Experience

    Route::get('/experiences', [ExperienceController::class, 'index'])->name('experiences');
    Route::get('/experiences/{id}/edit', [ExperienceController::class, 'edit'])->name('experience.edit');
    Route::put('/experiences/{id}', [ExperienceController::class, 'update'])->name('experience.update');
    Route::delete('/experiences/{id}', [ExperienceController::class, 'destroy'])->name('experience.destroy');
    // Add Experience Routes
    Route::get('/experiences/create', [ExperienceController::class, 'create'])->name('experience.create');
    Route::post('/experiences', [ExperienceController::class, 'store'])->name('experience.store');


    // Education

    Route::get('/educations', [EducationController::class, 'index'])->name('educations');
    Route::get('/educations/{id}/edit', [EducationController::class, 'edit'])->name('education.edit');
    Route::put('/educations/{id}', [EducationController::class, 'update'])->name('education.update');
    Route::delete('/educations/{id}', [EducationController::class, 'destroy'])->name('education.destroy');
    // Add Education Routes
    Route::get('/educations/create', [EducationController::class, 'create'])->name('education.create');
    Route::post('/educations', [EducationController::class, 'store'])->name('education.store');


    // Project

    Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
    Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])->name('project.edit');
    Route::put('/projects/{id}', [ProjectController::class, 'update'])->name('project.update');
    Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('project.destroy');
    // Add Project Routes
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('project.create');
    Route::post('/projects', [ProjectController::class, 'store'])->name('project.store');

    // Certificate

    Route::get('/certificates', [CertificateController::class, 'index'])->name('certificates');
    Route::get('/certificates/{id}/edit', [CertificateController::class, 'edit'])->name('certificate.edit');
    Route::put('/certificates/{id}', [CertificateController::class, 'update'])->name('certificate.update');
    Route::delete('/certificates/{id}', [CertificateController::class, 'destroy'])->name('certificate.destroy');
    // Add Project Routes
    Route::get('/certificates/create', [CertificateController::class, 'create'])->name('certificate.create');
    Route::post('/certificates', [CertificateController::class, 'store'])->name('certificate.store');

    // Profile

    Route::get('/profile', [UserController::class, 'index'])->name('profile');
    Route::put('/profile/edit', [UserController::class, 'edit'])->name('profile.edit');

    // Profile

    Route::get('/settings', [SettingController::class, 'index'])->name('settings');
    Route::put('/settings/edit', [SettingController::class, 'edit'])->name('settings.edit');

    // Password

    Route::get('/password', [PasswordController::class, 'index'])->name('password');
    Route::put('/password/edit', [PasswordController::class, 'edit'])->name('password.edit');
});

// Logout Route
Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
