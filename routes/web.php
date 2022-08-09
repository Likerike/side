<?php

use Illuminate\Support\Facades\Route;

# Forms for the orders
Route::get('/scoolform', function () { return view('forms/scoolform'); })->name('scoolform');
Route::get('/repaireform', function () { return view('forms/repaireform'); })->name('repaireform');
Route::get('/assemblyform', function () { return view('forms/assemblyform'); })->name('assemblyform');
Route::get('/settingsOSform', function () { return view('forms/settingsOSform'); })->name('settingsOSform');
Route::get('/commentsform', function () { return view('forms/commentsform'); })->name('commentsform');

# General content
Route::get('/', function () { return view('welcome'); })->name('welcome');
Route::get('/cabinet', function () { return view('content/cabinet'); })->name('cabinet');
Route::get('/aboutus', function () { return view('content/aboutus'); })->name('aboutus');
Route::get('/contacts', function () { return view('content/contacts'); })->name('contacts');
Route::get('/orders', function () { return view('content/orders'); })->name('orders');
Route::get('/comments', function () { return view('content/comments'); })->name('comments');

# Lists orders
Route::get('/myorders', function () { return view('lists/myorders'); })->name('myorders');
Route::get('/history', function () { return view('lists/history'); })->name('history');

Route::get('/denaid', function () { return view('lists/denaid'); })->name('denaid');

Route::get('/list-orders-for-repair', function () { return view('lists/list-orders-for-repair'); })->name('list-orders-for-repair');
Route::get('/list-orders-for-assembly', function () { return view('lists/list-orders-for-assembly'); })->name('list-orders-for-assembly');
Route::get('/list-orders-for-scool', function () { return view('lists/list-orders-for-scool'); })->name('list-orders-for-scool');
Route::get('/list-orders-for-setings-OS', function () { return view('lists/list-orders-for-setings-OS'); })->name('list-orders-for-setings-OS');

# Controllers
# post
Route::post('/post-repair', 'App\Http\Controllers\RepairController@orderRepair')->name('post-repair');
Route::post('/post-comments', 'App\Http\Controllers\CommentsController@comment')->name('post-comments');
Route::post('/post-assembly', 'App\Http\Controllers\AssemblyController@orderAssemblys')->name('post-assembly');
Route::post('/post-scool', 'App\Http\Controllers\ScoolControllero@orderScools')->name('post-scool');
Route::post('/post-settingsOS', 'App\Http\Controllers\SettingsOSController@orderSettingsOS')->name('post-settingsOS');

# Button Done;
Route::post('/myorders/Assembly{id}', 'App\Http\Controllers\MyOrderController@DoneAssembly')->name('DoneAssembly');
Route::post('/myorders/Repair{id}', 'App\Http\Controllers\MyOrderController@DoneRepair')->name('DoneRepair');
Route::post('/myorders/Scool{id}', 'App\Http\Controllers\MyOrderController@DoneScool')->name('DoneScool');
Route::post('/myorders/SettingsOS{id}', 'App\Http\Controllers\MyOrderController@DoneSettingsOS')->name('DoneSettingsOS');

# Button Denaid;
Route::post('/myorders/denaidAssembly{id}', 'App\Http\Controllers\MyOrderController@denaidAssembly')->name('DenaidAssembly');
Route::post('/myorders/denaidRepair{id}', 'App\Http\Controllers\MyOrderController@denaidRepair')->name('DenaidRepair');
Route::post('/myorders/denaidScool{id}', 'App\Http\Controllers\MyOrderController@denaidScool')->name('DenaidScool');
Route::post('/myorders/denaidSettingsOS{id}', 'App\Http\Controllers\MyOrderController@denaidSettingsOS')->name('DenaidSettingsOS');

# Button Okey
Route::post('/list-orders-for-assembly/okey{id}', 'App\Http\Controllers\AssemblyController@orderOkey')->name('list-orders-for-assembly-okey');
Route::post('/list-orders-for-repair/okey{id}', 'App\Http\Controllers\RepairController@Okey')->name('list-orders-for-repair-okey');
Route::post('/list-orders-for-scool/okey{id}', 'App\Http\Controllers\ScoolControllero@Okey')->name('list-orders-for-scool-okey');
Route::post('/list-orders-for-setings-OS/okey{id}', 'App\Http\Controllers\SettingsOSController@Okey')->name('list-orders-for-setings-OS-okey');

# Button No
Route::post('/list-orders-for-assembly/no{id}', 'App\Http\Controllers\AssemblyController@orderNo')->name('list-orders-for-assembly-no');
Route::post('/list-orders-for-repair/no{id}', 'App\Http\Controllers\RepairController@No')->name('list-orders-for-repair-no');
Route::post('/list-orders-for-scool/no{id}', 'App\Http\Controllers\ScoolControllero@No')->name('list-orders-for-scool-no');
Route::post('/list-orders-for-setings-OS/no{id}', 'App\Http\Controllers\SettingsOSController@No')->name('list-orders-for-setings-OS-no');

# Delete comment
Route::get('/comment/{id}/delete', 'App\Http\Controllers\CommentsController@deleteComment')->name('comment-delete');

# Delete Denaid Orders
Route::get('/myorders/Assembly{id}/delete', 'App\Http\Controllers\MyOrderController@deleteAssembly')->name('delete-Assembly');
Route::get('/myorders/Repair{id}/delete', 'App\Http\Controllers\MyOrderController@deleteRepair')->name('delete-Repair');
Route::get('/myorders/Scool{id}/delete', 'App\Http\Controllers\MyOrderController@deleteScool')->name('delete-Scool');
Route::get('/myorders/SettingsOS{id}/delete', 'App\Http\Controllers\MyOrderController@deleteSettingsOS')->name('delete-SettingsOS');

# get
Route::get('/comments', 'App\Http\Controllers\CommentsController@getcomment')->name('comments');
Route::get('/list-orders-for-assembly', 'App\Http\Controllers\AssemblyController@allorderAssemblys')->name('list-orders-for-assembly');
Route::get('/list-orders-for-repair', 'App\Http\Controllers\RepairController@allOrderRepairs')->name('list-orders-for-repair');
Route::get('/list-orders-for-scool', 'App\Http\Controllers\ScoolControllero@allOrderScool')->name('list-orders-for-scool');
Route::get('/list-orders-for-setings-OS', 'App\Http\Controllers\SettingsOSController@allOrderSettingsOS')->name('list-orders-for-setings-OS');
Route::get('/myorders', 'App\Http\Controllers\MyOrderController@allMyOrders')->name('myorders');
Route::get('/history', 'App\Http\Controllers\MyOrderController@history')->name('history');
Route::get('/denaid', 'App\Http\Controllers\MyOrderController@denaid')->name('denaid');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
