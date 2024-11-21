<?php

namespace App\Providers;
use App\Http\Services\Api\AboutCenter\AboutCenterService;
use App\Http\Services\Api\AboutCenter\MobileAboutCenterService;
use App\Http\Services\Api\AboutCenter\WebAboutCenterService;
use App\Http\Services\Api\Antique\AntiqueService;
use App\Http\Services\Api\Antique\MobileAntiqueService;
use App\Http\Services\Api\Antique\WebAntiqueService;
use App\Http\Services\Api\Auth\AuthService;
use App\Http\Services\Api\Auth\MobileAuthService;
use App\Http\Services\Api\Auth\WebAuthService;
use App\Http\Services\Api\BookStore\BookStoreService;
use App\Http\Services\Api\BookStore\MobileBookStoreService;
use App\Http\Services\Api\BookStore\WebBookStoreService;
use App\Http\Services\Api\Cart\MobileCartService;
use App\Http\Services\Api\Cart\CartService;
use App\Http\Services\Api\Cart\WebCartService;
use App\Http\Services\Api\Contact\ContactService;
use App\Http\Services\Api\Contact\MobileContactService;
use App\Http\Services\Api\Contact\WebContactService;
use App\Http\Services\Api\DepositMessage\DepositMessageService;
use App\Http\Services\Api\DepositMessage\MobileDepositMessageService;
use App\Http\Services\Api\DepositMessage\WebDepositMessageService;
use App\Http\Services\Api\InformationRequest\InformationRequestService;
use App\Http\Services\Api\InformationRequest\MobileInformationRequestService;
use App\Http\Services\Api\InformationRequest\WebInformationRequestService;
use App\Http\Services\Api\MediaCenter\MediaCenterService;
use App\Http\Services\Api\MediaCenter\MobileMediaCenterService;
use App\Http\Services\Api\MediaCenter\WebMediaCenterService;
use App\Http\Services\Api\MembershipRequest\MembershipRequestService;
use App\Http\Services\Api\MembershipRequest\MobileMembershipRequestService;
use App\Http\Services\Api\MembershipRequest\WebMembershipRequestService;
use App\Http\Services\Api\ResearchPaper\MobileResearchPaperService;
use App\Http\Services\Api\ResearchPaper\ResearchPaperService;
use App\Http\Services\Api\ResearchPaper\WebResearchPaperService;
use App\Http\Services\Api\Setting\MobileSettingService;
use App\Http\Services\Api\Setting\SettingService;
use App\Http\Services\Api\Setting\WebSettingService;
use App\Http\Services\Api\SurveyRequest\MobileSurveyRequestService;
use App\Http\Services\Api\SurveyRequest\SurveyRequestService;
use App\Http\Services\Api\SurveyRequest\WebSurveyRequestService;
use App\Http\Services\Api\UniversityMessage\MobileUniversityMessageService;
use App\Http\Services\Api\UniversityMessage\UniversityMessageService;
use App\Http\Services\Api\UniversityMessage\WebUniversityMessageService;
use Illuminate\Support\ServiceProvider;


class PlatformServiceProvider extends ServiceProvider
{


    public function detectPlatform($webService , $mobileService){
        if (request()->is('api/website'))
            return $webService;
        return $mobileService;
    }


    public function register()
    {
        $this->app->singleton(AuthService::class, $this->detectPlatform(WebAuthService::class,MobileAuthService::class));
        $this->app->singleton(BookStoreService::class, $this->detectPlatform(WebBookStoreService::class,MobileBookStoreService::class));
        $this->app->singleton(CartService::class, $this->detectPlatform(WebCartService::class,MobileCartService::class));
        $this->app->singleton(AntiqueService::class, $this->detectPlatform(WebAntiqueService::class,MobileAntiqueService::class));
        $this->app->singleton(ContactService::class, $this->detectPlatform(WebContactService::class,MobileContactService::class));
        $this->app->singleton(DepositMessageService::class, $this->detectPlatform(WebDepositMessageService::class,MobileDepositMessageService::class));
        $this->app->singleton(UniversityMessageService::class, $this->detectPlatform(WebUniversityMessageService::class,MobileUniversityMessageService::class));
        $this->app->singleton(InformationRequestService::class, $this->detectPlatform(WebInformationRequestService::class,MobileInformationRequestService::class));
        $this->app->singleton(SettingService::class, $this->detectPlatform(WebSettingService::class,MobileSettingService::class));
        $this->app->singleton(ResearchPaperService::class, $this->detectPlatform(WebResearchPaperService::class,MobileResearchPaperService::class));
        $this->app->singleton(MembershipRequestService::class, $this->detectPlatform(WebMembershipRequestService::class,MobileMembershipRequestService::class));
        $this->app->singleton(AboutCenterService::class, $this->detectPlatform(WebAboutCenterService::class,MobileAboutCenterService::class));
        $this->app->singleton(MediaCenterService::class, $this->detectPlatform(WebMediaCenterService::class,MobileMediaCenterService::class));
        $this->app->singleton(SurveyRequestService::class, $this->detectPlatform(WebSurveyRequestService::class,MobileSurveyRequestService::class));

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
