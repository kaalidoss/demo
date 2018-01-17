<?php
use App\Models;
use App\Company;
use App\Services;
use Laravel\Scout\Console\ImportCommand;
/*
 *
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user-lists', 'SearchUserController@userList')->name('user-lists');
Route::get('getuser', 'SearchUserController@getUsers')->name('getuser');

Route::get('getcompanies','SearchUserController@getComapanyModels')->name('getcompanies');

Route::get('import', function () {

    //Artisan::call('php artisan scout:import App\\Services');
   // dd(Artisan::output());
//   $result= Artisan::call('scout:import', ['model' => 'App\\Services']);
//dd($result);
   // Artisan::call('scout:import App\\\\Services');

    //php artisan scout:import App\\Models
   // \Artisan::call('Scout:import App\\User');

    return "imported successfully";
});


Route::get('service',function (){
    $store=new App\Services();
    $store->model_name='samsung';
    $store->service_center='banglore';
    $store->customer_name='kaalidoss';
    $store->save();
    return "service is created";
});

//Route::get('company',function (){
//
//    $company=new App\Company();
//    $company->company_name='micromax';
//    $company->save();
//
//    $model=new App\Models();
//    $model->company_id=$company->id;
//    $model->model_name='micromax z2';
//    $model->price=3000;
//    $model->save();
//    return "company and model is created";
//
//
//});

