<?php

use Illuminate\Support\Facades\Route;

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
/* ------------------- Front End Routes ------------------ */
use App\Http\Controllers\frontEnd\HomeController;
use App\Http\Controllers\frontEnd\MembershipController;
use App\Http\Controllers\frontEnd\WhyusController;
use App\Http\Controllers\frontEnd\TrainingController;
use App\Http\Controllers\frontEnd\ContactController;
use App\Http\Controllers\frontEnd\FaqController;
use App\Http\Controllers\frontEnd\PrivacypolicyController;
use App\Http\Controllers\frontEnd\TermsconditionsController;
use App\Http\Controllers\frontEnd\SignupController;
use App\Http\Controllers\frontEnd\SigninController;





/* ------------------- Super Admin Routes ------------------ */
use App\Http\Controllers\superAdmin\authController;
use App\Http\Controllers\superAdmin\DashboardController;
use App\Http\Controllers\superAdmin\SliderController;
use App\Http\Controllers\superAdmin\SettingController;
use App\Http\Controllers\superAdmin\UtilityController;
use App\Http\Controllers\superAdmin\UtilityTypeController;
use App\Http\Controllers\superAdmin\ConditionController;
use App\Http\Controllers\superAdmin\PolicyController;
use App\Http\Controllers\superAdmin\StoryController;
use App\Http\Controllers\superAdmin\MediaController;
use App\Http\Controllers\superAdmin\PopupController;
use App\Http\Controllers\superAdmin\StudioController;
use App\Http\Controllers\superAdmin\SquadController;
use App\Http\Controllers\superAdmin\JournalController;
use App\Http\Controllers\superAdmin\QueryController;
use App\Http\Controllers\superAdmin\AssociateController;
use App\Http\Controllers\superAdmin\ReviewController;
use App\Http\Controllers\superAdmin\EndorseController;
use App\Http\Controllers\superAdmin\ConnectController;
use App\Http\Controllers\superAdmin\FeatureController;
use App\Http\Controllers\superAdmin\PackageController;
use App\Http\Controllers\superAdmin\EnquiryController;

Route::resource('/login', authController::class);
Route::get('/register-user', [authController::class, 'registration'])->name('register-user');
Route::post('/custom-registration', [authController::class, 'customRegistration'])->name('register.custom');
Route::post('/custom-login', [authController::class, 'customLogin'])->name('login.custom');
Route::get('/logout', [DashboardController::class, 'LogOut'])->name('logout');



Route::resource('dashboards', DashboardController::class);
Route::resource('sliders', SliderController::class);
Route::resource('utilities', UtilityController::class);
Route::resource('utilitytypes', UtilityTypeController::class);
Route::resource('conditions', ConditionController::class);
Route::resource('policies', PolicyController::class);
Route::resource('settings', SettingController::class);
Route::resource('stories', StoryController::class);
Route::resource('medias', MediaController::class);
Route::resource('popups', PopupController::class);
Route::resource('studios', StudioController::class);
Route::resource('squads', SquadController::class);
Route::resource('journals', JournalController::class);
Route::resource('queries', QueryController::class);
Route::resource('associates', AssociateController::class);
Route::resource('reviews', ReviewController::class);
Route::resource('endorses', EndorseController::class);
Route::resource('connects', ConnectController::class);
Route::resource('features', FeatureController::class);
Route::resource('packages', PackageController::class);
Route::resource('enquiries', EnquiryController::class);

/* ------------------- Front End Routes ------------------ */
// Route::get('/', function () {
//     return view('welcome'); // Or redirect, controller, etc.
// });
Route::resource('/', HomeController::class);
Route::resource('home', HomeController::class);
Route::resource('memberships', MembershipController::class);
Route::resource('whyus', WhyusController::class);
Route::resource('training', TrainingController::class);
Route::get('/training/{slug}', 'TrainingController@show')->name('training.show');

Route::resource('contacts', ContactController::class);
Route::post('/subscribe/store', [HomeController::class, 'storeSubscribe'])->name('subscribe.store');
Route::resource('faqs', FaqController::class);
Route::resource('privacypolicy', PrivacypolicyController::class);
Route::resource('termsandconditions', TermsconditionsController::class);
// Signin Routes
Route::resource('/signups', SignupController::class);
Route::resource('/signins', SigninController::class);
Route::post('customsignin', [SigninController::class, 'customsignin'])->name('signins.custom');
Route::get('signout', [SigninController::class, 'signOut'])->name('signout');



use App\Http\Controllers\Auth\GoogleController;

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
