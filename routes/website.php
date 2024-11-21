<?php

use App\Http\Controllers\Api\AboutCenter\AboutCenterController;
use App\Http\Controllers\Api\Antique\AntiqueController;
use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\BookStore\BookStoreController;
use App\Http\Controllers\Api\Cart\CartController;
use App\Http\Controllers\Api\Contact\ContactController;
use App\Http\Controllers\Api\DepositMessage\DepositMessageController;
use App\Http\Controllers\Api\InformationRequest\InformationRequestController;
use App\Http\Controllers\Api\MediaCenter\MediaCenterController;
use App\Http\Controllers\Api\MembershipRequest\MembershipRequestController;
use App\Http\Controllers\Api\ResearchPaper\ResearchPaperController;
use App\Http\Controllers\Api\Setting\SettingController;
use App\Http\Controllers\Api\SurveyRequest\SurveyRequestController;
use App\Http\Controllers\Api\UniversityMessage\UniversityMessageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API WEB Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


        Route::post('login',[AuthController::class,'login']);
        Route::post('register',[AuthController::class,'register']);
        Route::get('setting',[SettingController::class,'setting']);
        Route::post('contact-us',[ContactController::class,'contactUs']);
        Route::get('about-us',[AboutCenterController::class,'aboutUs']);
        Route::get('date-of-center',[AboutCenterController::class,'dateOfCenter']);
        Route::get('chairman_of_the_boards',[AboutCenterController::class,'chairmanOfTheBoards']);
        Route::get('managements',[AboutCenterController::class,'managements']);
        Route::get('manager-detail/{id}',[AboutCenterController::class,'managerDetail']);
        Route::get('media-center-news',[MediaCenterController::class,'news']);
        Route::get('media-center-previous-events',[MediaCenterController::class,'previousEvents']);
        Route::get('media-center-video',[MediaCenterController::class,'video']);
        Route::get('media-center-annual-offer',[MediaCenterController::class,'annualOffer']);
        Route::get('media-center-new-show/{id}',[MediaCenterController::class,'newShow']);


        Route::group(['prefix' => 'auth','middleware' => 'jwt'], function (){
            Route::get('get-profile',[AuthController::class,'getProfile']);
            Route::post('update-profile',[AuthController::class,'updateProfile']);
            Route::post('logout',[AuthController::class,'logout']);
        });


        Route::group(['prefix' => 'book-store'], function (){
            Route::get('get-all-categories',[BookStoreController::class,'getAllCategories']);
            Route::get('get-all',[BookStoreController::class,'getAllBooks']);
            Route::get('show-one-book/{id}',[BookStoreController::class,'showOneBook']);
            Route::get('point-of-sales',[BookStoreController::class,'pointOfSales']);
        });


        Route::group(['prefix' => 'antiques'], function (){
            Route::get('get-all',[AntiqueController::class,'getAllAntiques']);
            Route::get('show-one/{id}',[AntiqueController::class,'showOneAntique']);
        });


        Route::group(['prefix' => 'cart','middleware' => 'jwt'], function (){
            Route::post('add-coupon-to-cart',[CartController::class,'addCoupon']);
            Route::post('add-to-cart',[CartController::class,'addToCart']);
            Route::get('items',[CartController::class,'cartItems']);
            Route::delete('remove-item/{id}',[CartController::class,'removeItemFromCart']);
        });

        Route::group(['prefix' => 'visitor-request'], function (){
            Route::get('all-entities',[ContactController::class,'getAllEntities']);
            Route::post('store',[ContactController::class,'storeVisitorRequest']);
        });


        Route::group(['prefix' => 'messages','middleware' => 'jwt'], function (){
            Route::post('university-message',[UniversityMessageController::class,'store']);
            Route::post('deposit-message',[DepositMessageController::class,'store']);
        });


        Route::group(['prefix' => 'request-information','middleware' => 'jwt'], function (){
            Route::post('step1',[InformationRequestController::class,'step1']);
            Route::get('step2',[InformationRequestController::class,'step2']);
            Route::get('step3',[InformationRequestController::class,'step3']);
            Route::get('step4',[InformationRequestController::class,'step4']);
            Route::put('add-or-cancel/{id}',[InformationRequestController::class,'addOrCancel']);
        });


        Route::group(['prefix' => 'research-paper'], function (){
            Route::get('departments',[ResearchPaperController::class,'departments']);
            Route::get('get-all/{id}',[ResearchPaperController::class,'getAllByDepartmentId']);
        });


        Route::group(['prefix' => 'membership-request','middleware' => 'jwt'], function (){
            Route::post('subscription',[MembershipRequestController::class,'subscription']);

        });

        Route::group(['prefix' => 'survey_request','middleware' => 'jwt'], function (){
            Route::get('check-step',[SurveyRequestController::class,'checkStep']);
            Route::post('step1',[SurveyRequestController::class,'step1']);
            Route::get('step2',[SurveyRequestController::class,'step2']);
            Route::get('references',[SurveyRequestController::class,'references']);
            Route::post('step3',[SurveyRequestController::class,'step3']);
            Route::get('get-references-user-choose',[SurveyRequestController::class,'referencesChoose']);
            Route::post('step4',[SurveyRequestController::class,'step4']);

        });

