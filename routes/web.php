<?php



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





// CHECK DB
Route::get('/checkdb', function () {
    try {
        DB::connection()->getPdo();
        return 'Соединение с базой данных установлено.';
    } catch (\Exception $e) {
        return 'Не удалось подключиться к базе данных: ' . $e->getMessage();
    }
});


