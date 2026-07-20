<?php

use App\Http\Controllers\ContactController;
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

Route::view('/','index');

Route::view('/about-us','about-us');

Route::view('/services','services');

/* Contact-Us */
Route::get('/contact-us',[ContactController::class,'contact']);
Route::post('/send-message',[ContactController::class,'sendEmail'])->name('contact.send');

/* SD */

Route::view('/feasibility-studies', 'sd/feasibility-studies');

Route::view('/hydrology', 'sd/hydrology');

Route::view('/hydrogeology', 'sd/hydrogeology');

Route::view('/soil-science', 'sd/soil-science');

Route::view('/geochemistry', 'sd/geochemistry');

Route::view('/environmental-assessment', 'sd/environmental-assessment');

Route::view('/environmental-monitoring-equipment-supply', 'sd/environmental-monitoring-equipment-supply');

Route::view('/hydropower', 'sd/hydropower');

Route::view('/infrastructure', 'sd/infrastructure');

Route::view('/energy', 'sd/energy');

Route::view('/geotechnical-services', 'sd/geotechnical-services');

Route::view('/geographical-information-systems', 'sd/geographical-information-systems');

Route::view('/laboratory-services', 'sd/laboratory-services');

Route::view('/gis-and-drone-survey', 'sd/gis-and-drone-survey');

Route::view('/integrated-data-science-and-ai-modelling', 'sd/integrated-data-science-and-ai-modelling');

Route::view('/basic-assessment', 'sd/basic-assessment');
