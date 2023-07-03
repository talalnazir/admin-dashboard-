<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\secondcontroller;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/dashboard','dashboard');

// login logout work
Route::view('/','login');

Route::view('/view','view');

Route::view('/design','frontpage.design');
Route::view('/register','register');
Route::view('/Experiment','experiment');
Route::view('/AddExperiment','AddExperiment');
Route::view('/addfieldday','addfieldday');
Route::view('/Addfarmar','Addfarmar');

// frontpage views
Route::view('/expermientlist','frontpage.expermeintlist');
Route::get('/expermientlist',[secondcontroller::class,'explist_get']);
Route::view('/viewlist','frontpage.expview');
Route::get('/viewlist/{id}',[secondcontroller::class,'getviewlist']);
Route::view('/FieldDaylist','frontpage.fielddaylist');
Route::get('/FieldDaylist',[secondcontroller::class,'fielddaylist_get']);
Route::get('/FarmerTraininglist',[secondcontroller::class,'getFarmerTraininglistall']);
Route::get('/BlockDemonstrationlist',[secondcontroller::class,'getdemo']);

Route::view('/Addblock','Addblock');
Route::view('/fieldday','fieldday');
Route::view('/FarmerTraining','FarmerTraining');
Route::view('/BlockDemonstration','block_demonstrations');
Route::POST('/register',[Admincontroller::class,'admininsert']);
Route::POST('/',[Admincontroller::class,'adminlogin']);
Route::post('/logout',[Admincontroller::class,'distroy'])->name('logout');

// dashboard get
Route::get('/dashboard',[Admincontroller::class,'dashboardget']);

// expermint insert
Route::POST('/Experiment',[Admincontroller::class,'expreg']);
Route::get('/Experiment',[Admincontroller::class,'exp_get']);
Route::get('/deleteexp/{id}',[Admincontroller::class,'deletexp']);
Route::get('/updateexperiment/{id}',[admincontroller::class,'updateexperimentget']);
Route::post('/updateexperiment/{id}',[admincontroller::class,'updateexperiment']);
Route::get('/view/{id}',[admincontroller::class,'getview']);

//  filed day process
Route::POST('/fieldday',[Admincontroller::class,'addfieldday']);
Route::get('/fieldday',[Admincontroller::class,'fieldday_get']);
Route::get('/deletefiled/{id}',[Admincontroller::class,'deletfiled']);
Route::get('/updfieldday/{id}',[admincontroller::class,'updfielddayget']);
Route::post('/updfieldday/{id}',[admincontroller::class,'updfieldday']);



// block demonstation process
Route::POST('/BlockDemonstration',[Admincontroller::class,'add_demonstartion']);
Route::get('/BlockDemonstration',[Admincontroller::class,'getdata']);
Route::get('/deletedemo/{id}',[Admincontroller::class,'deletdemo']);
Route::get('/updateblock/{id}',[admincontroller::class,'updateblockget']);
Route::post('/updateblock/{id}',[admincontroller::class,'updateblock']);
 
// farmar training

Route::POST('/FarmerTraining',[Admincontroller::class,'add_FarmerTraining']);
Route::get('/FarmerTraining',[Admincontroller::class,'getFarmerTraining']);
Route::get('/deletefarmer/{id}',[Admincontroller::class,'deletFarmerTraining']);
Route::get('/updatefarmertraing/{id}',[admincontroller::class,'updateFarmerTrainingget']);
Route::post('/updatefarmertraing/{id}',[admincontroller::class,'updatefarmertraing']);