<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WriterController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

// FrontEnd Controller
Route::get('/', function () {return redirect('/home');});
Route::get('/home', [FrontEndController::class, 'home']);
Route::get('/our-solutions', [FrontEndController::class, 'ourSolutions']);
Route::get('/hr-technology', [FrontEndController::class, 'hrTechnology']);
Route::get('/online-assessment', [FrontEndController::class, 'onlineAssessment']);
Route::get('/recruitment-services', [FrontEndController::class, 'recruitmentServices']);
Route::get('/hr-consultancy', [FrontEndController::class, 'hrConsultancy']);
Route::get('/events', [FrontEndController::class, 'events']);
Route::get('/event/{id}', [FrontEndController::class, 'lookEvent']);
Route::get('/articles', [FrontEndController::class, 'articles']);
Route::get('/article/{id}', [FrontEndController::class, 'lookArticle']);
Route::get('/jobs', [FrontEndController::class, 'careers']);
Route::get('/faq', [FrontEndController::class, 'faq']);
Route::get('/about-us', [FrontEndController::class, 'aboutUs']);
Route::get('/contact-us', [FrontEndController::class, 'contactUs']);
Route::get('/meet-the-team', [FrontEndController::class, 'meetTheTeam']);
Route::get('/our-values', [FrontEndController::class, 'ourValues']);
Route::get('/soon', [FrontEndController::class, 'brewingSoon']);

// Send the email
Route::post('/home', [FrontEndController::class, 'sendMail']);

// Login landing page
Route::get('/panel', [FrontEndController::class, 'landingLogin'])->name('not-login');

// Writer Auth
Route::get('/login', [LoginController::class, 'login']); //->name('login');
Route::post('/login', [LoginController::class, 'auth']);
Route::get('/signup', [LoginController::class, 'signup']);
Route::post('/signup', [LoginController::class, 'registerWriter']);
Route::get('/logout', [LoginController::class, 'logout']);

// Writer
Route::middleware('auth:web')->group(function () {
    Route::get('/writer', [WriterController::class, 'index']);
    Route::get('/writer/event/list', [WriterController::class, 'myEvent']);
    Route::get('/writer/event/add', [WriterController::class, 'addEvent']);
    Route::post('/writer/event/add', [WriterController::class, 'saveEvent']);
    Route::get('/writer/event/edit/{id}', [WriterController::class, 'editEvent']);
    Route::post('/writer/event/edit/{id}', [WriterController::class, 'updateEvent']);
    Route::post('/writer/event/delete/{id}', [WriterController::class, 'deleteEvent']);
    Route::get('/writer/event/{id}', [WriterController::class, 'lookEvent']);
    Route::get('/writer/article/list', [WriterController::class, 'myArticle']);
    Route::get('/writer/article/add', [WriterController::class, 'addArticle']);
    Route::post('/writer/article/add', [WriterController::class, 'saveArticle']);
    Route::get('/writer/article/edit/{id}', [WriterController::class, 'editArticle']);
    Route::post('/writer/article/edit/{id}', [WriterController::class, 'updateArticle']);
    Route::post('/writer/article/delete/{id}', [WriterController::class, 'deleteArticle']);
    Route::get('/writer/article/{id}', [WriterController::class, 'lookArticle']);
    Route::get('/writer/job/list', [WriterController::class, 'myCareer']);
    Route::get('/writer/job/add', [WriterController::class, 'addCareer']);
    Route::post('/writer/job/add', [WriterController::class, 'saveCareer']);
    Route::get('/writer/job/edit/{id}', [WriterController::class, 'editCareer']);
    Route::post('/writer/job/edit/{id}', [WriterController::class, 'updateCareer']);
    Route::post('/writer/job/delete/{id}', [WriterController::class, 'deleteCareer']);
    Route::get('/writer/job/{id}', [WriterController::class, 'lookCareer']);
    Route::get('/writer/faq/list', [WriterController::class, 'myFAQ']);
    Route::get('/writer/faq/add', [WriterController::class, 'addFAQ']);
    Route::post('/writer/faq/add', [WriterController::class, 'saveFAQ']);
    Route::get('/writer/faq/edit/{id}', [WriterController::class, 'editFAQ']);
    Route::post('/writer/faq/edit/{id}', [WriterController::class, 'updateFAQ']);
    Route::post('/writer/faq/delete/{id}', [WriterController::class, 'deleteFAQ']);
    Route::get('/writer/faq/{id}', [WriterController::class, 'lookFAQ']);
    Route::get('/writer/social-media', [WriterController::class, 'editSocialMedia']);
    Route::post('/writer/social-media', [WriterController::class, 'updateSocialMedia']);
    Route::get('/writer/editAccount/{id}', [WriterController::class, 'editAccount']);
    Route::post('/writer/editAccount/{id}', [WriterController::class, 'updateAccount']);
    Route::post('/writer/article/add/photos', [WriterController::class, 'uploadImageCKEditor'])->name('upload');
});

// Admin Auth
Route::get('/admin/login', [LoginController::class, 'loginAdmin']); //->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'authAdmin']);
Route::get('/admin/signup', [LoginController::class, 'signupAdmin']);
Route::post('/admin/signup', [LoginController::class, 'registerAdmin']);
Route::get('/admin/logout', [LoginController::class, 'logoutAdmin']);

// Admin
Route::middleware('auth:admin')->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/writer/list', [AdminController::class, 'listWriter']);
    Route::get('/admin/writer/resetpass/{id}', [AdminController::class, 'resetPassword']);
    Route::post('/admin/writer/resetpass/{id}', [AdminController::class, 'storeResetPassword']);
    Route::get('/admin/category/list', [AdminController::class, 'listCategory']);
    Route::get('/admin/category/add', [AdminController::class, 'addCategory']);
    Route::post('/admin/category/add', [AdminController::class, 'saveCategory']);
    Route::post('/admin/category/delete/{id}', [AdminController::class, 'deleteCategory']);
    Route::get('/admin/category/edit/{id}', [AdminController::class, 'editCategory']);
    Route::post('/admin/category/edit/{id}', [AdminController::class, 'updateCategory']);
    Route::get('/admin/job/category/list', [AdminController::class, 'listCareerCategory']);
    Route::get('/admin/job/category/add', [AdminController::class, 'addCareerCategory']);
    Route::post('/admin/job/category/add', [AdminController::class, 'saveCareerCategory']);
    Route::post('/admin/job/category/delete/{id}', [AdminController::class, 'deleteCareerCategory']);
    Route::get('/admin/job/category/edit/{id}', [AdminController::class, 'editCareerCategory']);
    Route::post('/admin/job/category/edit/{id}', [AdminController::class, 'updateCareerCategory']);
});
