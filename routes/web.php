<?php

use App\Mail\MyTestMail;
use App\Models\City;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


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


//Make file ar and en to translate all keys

require_once __DIR__ . '/dashboard.php';//include admin routes here

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){

Route::get('/', function () {

    return view('welcome');
//    return view('home');
});


//
//    Route::get('/check-date', function () {
//
//        // Assuming you have a date stored in a variable, for example, $yourDate
//        $yourDate = Carbon::parse('2023-01-15');
//
//        // Format the date as needed
//                $formattedDate = $yourDate->format('d F Y');
//
//        // Display the formatted date
//                echo $formattedDate;
//    });



//    Route::get('/check-date', function () {
//        // Number of years you want to add to the current date
//        $numberOfYears = 5;
//
//        // Get the current date
//        $currentDate = Carbon::now();
//
//        // Generate from_date by subtracting years from the current date
//        $fromDate = $currentDate->subYears($numberOfYears);
//
//        // Reset the date back to the current date
//        $currentDate = Carbon::now();
//
//        // Generate to_date by adding years to the current date
//        $toDate = $currentDate->addYears($numberOfYears);
//
//        // Now you have $fromDate and $toDate with the desired range
//
//        return response()->json([
//            'fromDate' => $fromDate,
//            'toDate' => $toDate,
//
//        ]);
//    });




//Make file ar and file en translate for all keys
//Route::get('index', function () {
//    return view('index');
//});
//


//Route::get('login', function () {
//    return view('admin.auth.login');
//});
//
//    Route::get('test', function () {
//
//        $post = \App\Models\BookStore::first();
//        echo $post->translate('ch')->title; // My first post
//
//    });


//Route::get('send-mail', function () {
//
//    $details = [
//        'title' => 'Mail from ItSolutionStuff.com',
//        'body' => 'This is for testing email using smtp'
//    ];
//
//    Mail::to('eslamemo457@gmail.com')->send(new MyTestMail($details));
//
//    dd("Email is Sent.");
//});


});

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('optimize:clear');
    return response()->json(['status' => 'success','code' => 200]);
});



