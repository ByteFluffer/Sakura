<?php
use Modules\AdminPanel\Http\Controllers\AdminPanelController;
use Modules\AdminPanel\Http\Controllers\MediaController;
use Modules\AdminPanel\Http\Controllers\PageController;
use Modules\AdminPanel\Http\Controllers\SiteImagesController;
use Modules\AdminPanel\Http\Controllers\SiteTextController;

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

// Admin dashboard
// Route::group(['middleware' => ['role:Super Admin', 'role:Admin', ]], function () { //'role:Redacteur'
//     Route::get('/admin', [AdminPanelController::class, 'index']);
// });
Route::group(['middleware' => ['role:Super Admin|Admin|Redacteur']], function () {
    Route::get('/admin', [AdminPanelController::class, 'index']);
});

/**
 * Modules
 */
Route::get('/admin/modules/discord_autoposter', [AdminPanelController::class, 'discordAutoPost']);
Route::get('/admin/modules/notificaties', [AdminPanelController::class, 'notifications']);

/**
 * Backup
 */
Route::get('/admin/backup/aanmaken', [AdminPanelController::class, 'backupCreate']);
Route::get('/admin/backup/automatisch', [AdminPanelController::class, 'backup_automatic']);

/**
 * Updates
 */
Route::get('/admin/updates', [AdminPanelController::class, 'updates']);

/**
 * Site settings
 */
Route::get('/admin/instellingen/algemeen', [AdminPanelController::class, 'settingsGeneral']);
Route::get('/admin/instellingen/artikelen', [AdminPanelController::class, 'settingsArticles']);
Route::get('/admin/instellingen/comments', [AdminPanelController::class, 'settingsComments']);
Route::get('/admin/instellingen/urls', [AdminPanelController::class, 'settingsUrls']);
Route::get('/admin/instellingen/email-server', [AdminPanelController::class, 'settingsEmailServer']);

/**
 * technical
 */
Route::get('/admin/technisch/informatie', [AdminPanelController::class, 'SiteAndServerinfo']);
Route::get('/admin/technisch/cache', [AdminPanelController::class, 'settingsCache']);
Route::get('/admin/technisch/beveiliging', [AdminPanelController::class, 'settingsSecurity']);

/**
 * Logs
 */
Route::get('/admin/logs/systeem', [AdminPanelController::class, 'logSystem']);
Route::get('/admin/logs/error', [AdminPanelController::class, 'logError']);
Route::get('/admin/logs/access', [AdminPanelController::class, 'logAccess']);
