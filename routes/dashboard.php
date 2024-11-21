<?php

use App\Http\Controllers\Dashboard\Award\AwardController;
use App\Http\Controllers\Dashboard\CenterDate\CenterDateController;
use App\Http\Controllers\Dashboard\ChairmanOfTheBoard\ChairmanOfTheBoardController;
use App\Http\Controllers\Dashboard\ChairmanOfTheBoardNew\ChairmanOfTheBoardNewController;
use App\Http\Controllers\Dashboard\Event\EventController;
use App\Http\Controllers\Dashboard\HonoraryDegree\HonoraryDegreeController;
use App\Http\Controllers\Dashboard\Management\ManagementController;
use App\Http\Controllers\Dashboard\RolesAroundTheWorld\RolesAroundTheWorldController;
use App\Http\Controllers\Dashboard\AboutUsInformation\AboutUsInformationController;
use App\Http\Controllers\Dashboard\Admin\AdminController;
use App\Http\Controllers\AntiqueController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookCategoryController;
use App\Http\Controllers\BookStoreController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\Dashboard\Contact\ContactController;
use App\Http\Controllers\Dashboard\Coupon\CouponController;
use App\Http\Controllers\Dashboard\Entity\EntityController;
use App\Http\Controllers\Dashboard\EntityVisitor\EntityVisitorController;
use App\Http\Controllers\FaisalHomeController;
use App\Http\Controllers\FaisalHomePage\FaisalHomePageDocumentController;
use App\Http\Controllers\FaisalHomePage\FaisalHomePageImageController;
use App\Http\Controllers\FaisalHomePage\FaisalHomePageSoundController;
use App\Http\Controllers\FaisalHomePage\FaisalHomePageVideoController;
use App\Http\Controllers\InformationRequestController;
use App\Http\Controllers\Dashboard\AnnualOffer\AnnualOfferController;
use App\Http\Controllers\Dashboard\News\NewController;
use App\Http\Controllers\Dashboard\MediaCenterVideo\VideoController;
use App\Http\Controllers\MemberShipRequestController;
use App\Http\Controllers\Dashboard\Aspiration\MessageController;
use App\Http\Controllers\Dashboard\MessageDeposit\MessageDepositController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Dashboard\Payment\PaymentController;
use App\Http\Controllers\PointOfSaleController;
use App\Http\Controllers\PointOfSalePhoneController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\ReferenceUserChooseController;
use App\Http\Controllers\Dashboard\ResearchPaper\ResearchPaperController;
use App\Http\Controllers\Dashboard\ResearchPaperDepartment\ResearchPaperDepartmentController;
use App\Http\Controllers\Dashboard\Setting\SettingController;
use App\Http\Controllers\Dashboard\Slider\SliderController;
use App\Http\Controllers\SurveyRequestController;
use App\Http\Controllers\Dashboard\UniversityMessage\UniversityMessageController;
use App\Http\Controllers\Dashboard\User\UserController;
use App\Http\Controllers\Dashboard\Aspiration\ValueController;
use App\Http\Controllers\Dashboard\Aspiration\VisionController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


        Route::group( [
            'prefix' => LaravelLocalization::setLocale(),
            'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
        ], function(){

        Route::get('/', function () {
            return view('welcome');
        });


            Route::get('admin/login',[AdminController::class,'login'])->name('admin.login');
            Route::post('admin/loginProcess',[AdminController::class,'loginProcess'])->name('admin.loginProcess');

            Route::group(['prefix' => 'admin','middleware' => 'auth:admin','as' => 'admin.'], function (){
            Route::get('home',[AdminController::class,'home'])->name('home');
            Route::get('index',[AdminController::class,'index'])->name('index');
            Route::get('create',[AdminController::class,'create'])->name('create');
            Route::post('store',[AdminController::class,'store'])->name('store');
            Route::get('edit/{id}',[AdminController::class,'edit'])->name('edit');
            Route::put('update/{id}',[AdminController::class,'update'])->name('update');
            Route::delete('destroy/{id}',[AdminController::class,'destroy'])->name('destroy');
            Route::get('active/{id}',[AdminController::class,'active'])->name('active');
            Route::get('logout',[AdminController::class,'logout'])->name('logout');
        });

        Route::group(['middleware' => 'auth:admin'], function (){
            Route::get('members',[UserController::class,'members'])->name('members');
            Route::resource('users',UserController::class)->only('index','destroy');
        });

        Route::group(['prefix' => 'setting','middleware' => 'auth:admin','as' => 'setting.'], function (){
            Route::get('edit',[SettingController::class,'edit'])->name('edit');
            Route::post('update',[SettingController::class,'update'])->name('update');
        });


    Route::group(['middleware' => 'auth:admin'], function (){
        Route::resource('bookCategories',BookCategoryController::class)->except(['show','destroy']);
        Route::get('bookCategories/delete/{id}',[BookCategoryController::class,'delete'])->name('bookCategories.delete');
        Route::resource('authors',AuthorController::class)->except(['show','destroy']);
        Route::get('authors/delete/{id}',[AuthorController::class,'delete'])->name('authors.delete');
        Route::resource('books',BookStoreController::class)->except(['show','destroy']);
        Route::get('books/delete/{id}',[BookStoreController::class,'delete'])->name('books.delete');
        Route::get('payments-transfers',[PaymentController::class,'paymentsTransfers'])->name('payments.transfers');
        Route::get('payment-transfer-accept',[PaymentController::class,'paymentAccept'])->name('payment.transfer.accept');
        Route::get('payments-transfers-refuse',[PaymentController::class,'paymentsRefuse'])->name('payment.transfer.refuse');
        Route::resource('cities',CityController::class)->except(['show','destroy']);
        Route::get('cities/delete/{id}',[CityController::class,'delete'])->name('cities.delete');
        Route::resource('point_of_sales',PointOfSaleController::class)->except(['show','destroy']);
        Route::get('point_of_sales/delete/{id}',[PointOfSaleController::class,'delete'])->name('point_of_sales.delete');
        Route::resource('point_of_sales_phones',PointOfSalePhoneController::class)->except(['index','create','show','destroy']);
        Route::resource('contacts',ContactController::class)->only('index','destroy');
        Route::resource('entities',EntityController::class)->except(['show']);
        Route::resource('visitors',EntityVisitorController::class)->only('index','destroy');
        Route::resource('antiques',AntiqueController::class)->except(['show','destroy']);
        Route::get('antiques/delete/{id}',[AntiqueController::class,'delete'])->name('antiques.delete');
        Route::resource('sliders',SliderController::class)->except(['show']);
        Route::resource('visions',VisionController::class)->except(['show']);
        Route::resource('messages',MessageController::class)->except(['show']);
        Route::resource('values',ValueController::class)->except(['show']);
        Route::resource('research_paper_departments',ResearchPaperDepartmentController::class)->except(['show']);
        Route::resource('research_papers',ResearchPaperController::class)->except(['show']);
        Route::resource('university_messages',UniversityMessageController::class)->only('index','destroy');
        Route::resource('message_deposits',MessageDepositController::class)->only('index','destroy');
        Route::resource('news',NewController::class)->except(['show']);
        Route::resource('media_center_videos',VideoController::class)->except(['show']);
        Route::resource('events',EventController::class)->except(['show']);
        Route::get('next_events',[EventController::class,'next_events'])->name('next_events');
        Route::resource('annual_offers',AnnualOfferController::class)->except(['show']);
        Route::resource('about_us_informations',AboutUsInformationController::class)->except(['show']);
        Route::resource('chairman_of_the_boards',ChairmanOfTheBoardController::class)->except(['show']);
        Route::resource('roles_around_the_world_sections',RolesAroundTheWorldController::class)->except(['show']);
        Route::resource('awards',AwardController::class)->except(['show']);
        Route::resource('honorary_degrees',HonoraryDegreeController::class)->except(['show']);
        Route::resource('center_dates',CenterDateController::class)->except(['show']);
        Route::resource('chairman_of_the_board_news',ChairmanOfTheBoardNewController::class)->except(['show']);
        Route::resource('managements',ManagementController::class)->except(['show']);
        Route::get('new_orders',[OrderController::class,'new_orders'])->name('new_orders');
        Route::get('in_progress_orders',[OrderController::class,'in_progress_orders'])->name('in_progress_orders');
        Route::get('finished_orders',[OrderController::class,'finished_orders'])->name('finished_orders');
        Route::get('refused_orders',[OrderController::class,'refused_orders'])->name('refused_orders');
        Route::get('order_details/{id}',[OrderController::class,'order_details'])->name('order_details');
        Route::get('payment_details/{id}',[OrderController::class,'payment_details'])->name('payment_details');
        Route::get('in_progress_status/{id}',[OrderController::class,'in_progress_status'])->name('in_progress_status');
        Route::get('finished_status/{id}',[OrderController::class,'finished_status'])->name('finished_status');
        Route::get('refused_status/{id}',[OrderController::class,'refused_status'])->name('refused_status');
        Route::resource('coupons',CouponController::class)->except(['show']);


        Route::group(['prefix' => 'point_of_sales_phones','as' => 'point_of_sales_phones.'], function (){
            Route::get('getAllPhonesOfPointSale/{id}',[PointOfSalePhoneController::class,'getAllPhonesOfPointSale'])->name('getAllPhonesOfPointSale');
            Route::get('addPhone/{id}',[PointOfSalePhoneController::class,'addPhone'])->name('addPhone');
            Route::get('delete/{id}',[PointOfSalePhoneController::class,'delete'])->name('delete');
        });


        Route::group(['prefix' => 'membership_requests','as' => 'membership_requests.'], function (){
            Route::get('new',[MemberShipRequestController::class,'new_orders'])->name('new');
            Route::get('finished',[MemberShipRequestController::class,'finished_orders'])->name('finished');
            Route::get('refused',[MemberShipRequestController::class,'refused_orders'])->name('refused');
            Route::get('payment_details/{id}',[MemberShipRequestController::class,'payment_details'])->name('payment_details');
            Route::get('details/{id}',[MemberShipRequestController::class,'details'])->name('details');
        });


        Route::group(['prefix' => 'information_requests','as' => 'information_requests.'], function (){
            Route::get('new',[InformationRequestController::class,'new_orders'])->name('new');
            Route::get('accept',[InformationRequestController::class,'accept_orders'])->name('accept');
            Route::get('finished',[InformationRequestController::class,'finished_orders'])->name('finished');
            Route::get('refused',[InformationRequestController::class,'refused_orders'])->name('refused');
            Route::get('payment_details/{id}',[InformationRequestController::class,'payment_details'])->name('payment_details');
            Route::get('accept_update/{id}',[InformationRequestController::class,'accept_status'])->name('accept_update');
            Route::get('refused_update/{id}',[InformationRequestController::class,'refused_status'])->name('refused_update');
            Route::get('finished_update/{id}',[InformationRequestController::class,'finished_status'])->name('finished_update');
        });


        Route::group(['prefix' => 'survey_requests','as' => 'survey_requests.'], function (){
            Route::get('new',[SurveyRequestController::class,'new_orders'])->name('new');
            Route::get('accept',[SurveyRequestController::class,'accept_orders'])->name('accept');
            Route::get('finished',[SurveyRequestController::class,'finished_orders'])->name('finished');
            Route::get('refused',[SurveyRequestController::class,'refused_orders'])->name('refused');
            Route::get('payment_details/{id}',[SurveyRequestController::class,'payment_details'])->name('payment_details');
            Route::get('edit/{id}',[SurveyRequestController::class,'edit'])->name('edit');
            Route::put('update/{id}',[SurveyRequestController::class,'update'])->name('update');
            Route::get('in_progress_update/{id}',[SurveyRequestController::class,'in_progress_status'])->name('in_progress_update');
            Route::get('accept_update/{id}',[SurveyRequestController::class,'accept_status'])->name('accept_update');
            Route::get('payment_ready/{id}',[SurveyRequestController::class,'payment_ready'])->name('payment_ready');
            Route::get('finished_update/{id}',[SurveyRequestController::class,'finished_status'])->name('finished_update');
            Route::get('refused_update/{id}',[SurveyRequestController::class,'refused_status'])->name('refused_update');
        });


        Route::group(['prefix' => 'references','as' => 'references.'], function (){
            Route::get('index/{survey_request_id}',[ReferenceController::class,'index'])->name('index');
            Route::get('create/{survey_request_id}',[ReferenceController::class,'create'])->name('create');
            Route::post('store',[ReferenceController::class,'store'])->name('store');
            Route::get('delete/{id}',[ReferenceController::class,'delete'])->name('delete');
        });


        Route::group(['prefix' => 'reference_users','as' => 'reference_users.'], function (){
            Route::get('index/{survey_request_id}',[ReferenceUserChooseController::class,'index'])->name('index');

        });

        Route::group(['prefix' => 'faisal_home','as' => 'faisal_home.'], function (){
            Route::get('edit',[FaisalHomeController::class,'edit'])->name('edit');
            Route::put('update/{id}',[FaisalHomeController::class,'update'])->name('update');
        });


    Route::group(['prefix' => 'faisal_home_pages'], function (){
        Route::resource('documents',FaisalHomePageDocumentController::class)->except(['show','destroy']);
        Route::get('documents/delete/{id}',[FaisalHomePageDocumentController::class,'delete'])->name('faisal_home_pages.documents.delete');
        Route::resource('images',FaisalHomePageImageController::class)->except(['show','destroy']);
        Route::get('images/delete/{id}',[FaisalHomePageImageController::class,'delete'])->name('faisal_home_pages.images.delete');
        Route::resource('videos',FaisalHomePageVideoController::class)->except(['show','destroy']);
        Route::resource('sounds',FaisalHomePageSoundController::class)->except(['show','destroy']);
        Route::get('sounds/delete/{id}',[FaisalHomePageSoundController::class,'delete'])->name('faisal_home_pages.sounds.delete');
        });
    });


});



