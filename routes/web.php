<?php

use App\Http\Controllers\HomeController;
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

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('dashboards.dashboard1');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Dashboard Routes
  Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard.1');
  Route::get('/dashboard2', [HomeController::class, 'index2'])->name('dashboard.2');
  Route::get('/dashboard3', [HomeController::class, 'index3'])->name('dashboard.3');

  Route::get('/myschedule', [HomeController::class, 'MySchedule'])->name('my-schedule');
  Route::get('/integration', [HomeController::class, 'Integration'])->name('integration');

  Route::get('/calenderconnections', [HomeController::class, 'CalenderConnections'])->name('calender-connections');
  Route::get('/page-user', [HomeController::class, 'User'])->name('page-user');
  Route::get('/page-new-event', [HomeController::class, 'PageNewEvent'])->name('page-new-event');
  Route::get('/page-add-event', [HomeController::class, 'PageAddEvent'])->name('page-add-event');
  Route::get('/page-workflow', [HomeController::class, 'PageWorkFlow'])->name('page-work-flow');
  //App Details Pages Routs
  Route::group(['prefix' => 'app'], function() {

    //Userdetail Page Routs
    Route::get('user/profile', [HomeController::class, 'userprofile'])->name('app.userdetail.userprofile');
    //extraapp Page Routs
    Route::get('privacy-policy', [HomeController::class, 'PrivacyPolicy'])->name('privacy-policy');
    Route::get('terms-of-use', [HomeController::class, 'TermsOfUse'])->name('terms-of-use');

  });

//UI Pages Routs
  Route::group(['prefix' => 'ui'], function() {
    Route::get('grid', [HomeController::class, 'UiGrid'])->name('ui.grid');
    Route::get('tabs', [HomeController::class, 'UiTabs'])->name('ui.tabs');
    Route::get('cards', [HomeController::class, 'UiCards'])->name('ui.cards');
    Route::get('modal', [HomeController::class, 'UiModal'])->name('ui.modal');
    Route::get('alerts', [HomeController::class, 'UiAlerts'])->name('ui.alerts');
    Route::get('badges', [HomeController::class, 'UiBadges'])->name('ui.badges');
    Route::get('colors', [HomeController::class, 'UiColors'])->name('ui.colors');
    Route::get('images', [HomeController::class, 'UiImages'])->name('ui.images');
    Route::get('avatars', [HomeController::class, 'UiAvatars'])->name('ui.avatars');
    Route::get('buttons', [HomeController::class, 'UiButtons'])->name('ui.buttons');
    Route::get('carousel', [HomeController::class, 'UiCarousel'])->name('ui.carousel');
    Route::get('popovers', [HomeController::class, 'UiPopovers'])->name('ui.popovers');
    Route::get('tooltips', [HomeController::class, 'UiTooltips'])->name('ui.tooltips');
    Route::get('boxshadows', [HomeController::class, 'UiBoxshadows'])->name('ui.boxshadows');
    Route::get('breadcrumb', [HomeController::class, 'UiBreadcrumb'])->name('ui.breadcrumb');
    Route::get('listgroup', [HomeController::class, 'UiListgroup'])->name('ui.listgroup');
    Route::get('pagination', [HomeController::class, 'UiPagination'])->name('ui.pagination');
    Route::get('typography', [HomeController::class, 'UiTypography'])->name('ui.typography');
    Route::get('media', [HomeController::class, 'UiMedia'])->name('ui.media');
    Route::get('progressbars', [HomeController::class, 'UiProgressbars'])->name('ui.progressbars');
    Route::get('buttongroup', [HomeController::class, 'UiButtongroup'])->name('ui.buttongroup');
    Route::get('notification', [HomeController::class, 'UiNotification'])->name('ui.notification');
    Route::get('video', [HomeController::class, 'UiVideo'])->name('ui.video');
    Route::get('helperclass', [HomeController::class, 'UiHelperClass'])->name('ui.helperclass');
  });

//Contact Page Routs
  Route::group(['prefix' => 'contact'], function() {
    Route::get('contact-list', [HomeController::class, 'contactList'])->name('contact.contact-list');
    Route::get('contact-detail', [HomeController::class, 'contactDetail'])->name('contact.contact-detail');
  });
//Auth pages Routs
  Route::group(['prefix' => 'auth'], function() {
    Route::get('login', [HomeController::class, 'authLogin'])->name('auth.login');
    Route::get('register', [HomeController::class, 'authRegister'])->name('auth.register');
    Route::get('recover-password', [HomeController::class, 'authRecoverPassword'])->name('auth.recover-password');
    Route::get('confirm-email', [HomeController::class, 'authConfirmEmail'])->name('auth.confirm-email');
  });


  //Pricing pages Routs
  Route::group(['prefix' => 'pricing'], function() {
    Route::get('pricing1', [HomeController::class, 'Pricing1'])->name('pricing.pricing1');
    Route::get('pricing2', [HomeController::class, 'Pricing2'])->name('pricing.pricing2');
    Route::get('pricing3', [HomeController::class, 'Pricing3'])->name('pricing.pricing3');
    Route::get('pricing4', [HomeController::class, 'Pricing4'])->name('pricing.pricing4');
  });

  //Timeline Page Routs
  Route::group(['prefix' => 'timeline'], function() {
    Route::get('timeline1', [HomeController::class, 'timeline1'])->name('timeline.timeline1');
    Route::get('timeline2', [HomeController::class, 'timeline2'])->name('timeline.timeline2');
    Route::get('timeline3', [HomeController::class, 'timeline3'])->name('timeline.timeline3');
    Route::get('timeline4', [HomeController::class, 'timeline4'])->name('timeline.timeline4');
  });


    //Error pages Routs
  Route::group(['prefix' => 'pageError'], function() {
    Route::get('error404', [HomeController::class, 'Error404'])->name('pageError.error404');
    Route::get('error500', [HomeController::class, 'Error500'])->name('pageError.error500');
  });

//Extra pages Routs
  Route::group(['prefix' => 'extra'], function() {
    Route::get('faq', [HomeController::class, 'ExtrapagesFaq'])->name('extrapages.faq');
    Route::get('invoice', [HomeController::class, 'ExtrapagesInvoice'])->name('extrapages.invoice');
    Route::get('blankpage', [HomeController::class, 'ExtrapagesBlankpage'])->name('extrapages.blankpage');
    Route::get('maintenance', [HomeController::class, 'ExtrapagesMaintenance'])->name('extrapages.maintenance');
    Route::get('comingsoon', [HomeController::class, 'ExtrapagesComingsoon'])->name('extrapages.comingsoon');
    Route::get('subscriber', [HomeController::class, 'ExtrapagesSubscriber'])->name('extrapages.subscriber');
  });











