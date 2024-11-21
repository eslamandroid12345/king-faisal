<?php

namespace App\Providers;
use App\Repository\AboutChairmanOfTheBoardRepositoryInterface;
use App\Repository\AboutUsInformationRepositoryInterface;
use App\Repository\AnnualOfferRepositoryInterface;
use App\Repository\AntiqueImageRepositoryInterface;
use App\Repository\AntiqueRepositoryInterface;
use App\Repository\AspirationRepositoryInterface;
use App\Repository\AuthorRepositoryInterface;
use App\Repository\AwardRepositoryInterface;
use App\Repository\BookCategoryRepositoryInterface;
use App\Repository\BookStoreRepositoryInterface;
use App\Repository\CartContentRepositoryInterface;
use App\Repository\CartRepositoryInterface;
use App\Repository\CenterDateRepositoryInterface;
use App\Repository\ChairmanOfTheBoardNewRepositoryInterface;
use App\Repository\ChairmanOfTheBoardRepositoryInterface;
use App\Repository\CityRepositoryInterface;
use App\Repository\ContactRepositoryInterface;
use App\Repository\CouponRepositoryInterface;
use App\Repository\CouponUsageRepositoryInterface;
use App\Repository\Eloquent\AboutChairmanOfTheBoardRepository;
use App\Repository\Eloquent\AdminRepository;
use App\Repository\Eloquent\AnnualOfferRepository;
use App\Repository\Eloquent\AntiqueImageRepository;
use App\Repository\Eloquent\AntiqueRepository;
use App\Repository\Eloquent\AspirationRepository;
use App\Repository\Eloquent\AuthorRepository;
use App\Repository\Eloquent\AwardRepository;
use App\Repository\Eloquent\BookCategoryRepository;
use App\Repository\Eloquent\BookStoreRepository;
use App\Repository\Eloquent\CartContentRepository;
use App\Repository\Eloquent\CartRepository;
use App\Repository\Eloquent\CenterDateRepository;
use App\Repository\Eloquent\ChairmanOfTheBoardNewRepository;
use App\Repository\Eloquent\ChairmanOfTheBoardRepository;
use App\Repository\Eloquent\CityRepository;
use App\Repository\Eloquent\ContactRepository;
use App\Repository\Eloquent\CouponRepository;
use App\Repository\Eloquent\CouponUsageRepository;
use App\Repository\Eloquent\EntityRepository;
use App\Repository\Eloquent\EntityVisitorRepository;
use App\Repository\Eloquent\FaisalHomePageDocumentRepository;
use App\Repository\Eloquent\FaisalHomePageImageRepository;
use App\Repository\Eloquent\FaisalHomePageSoundRepository;
use App\Repository\Eloquent\FaisalHomePageVideoRepository;
use App\Repository\Eloquent\FaisalHomeRepository;
use App\Repository\Eloquent\HonoraryDegreeRepository;
use App\Repository\Eloquent\InformationRequestRepository;
use App\Repository\Eloquent\ManagementRepository;
use App\Repository\Eloquent\MediaCenterDepartmentRepository;
use App\Repository\Eloquent\MemberShipRequestRepository;
use App\Repository\Eloquent\MessageRepository;
use App\Repository\Eloquent\NewRepository;
use App\Repository\Eloquent\OrderRepository;
use App\Repository\Eloquent\PaymentRepository;
use App\Repository\Eloquent\PointOfSalePhoneRepository;
use App\Repository\Eloquent\PointOfSaleRepository;
use App\Repository\Eloquent\PreviousEventRepository;
use App\Repository\Eloquent\ReferenceRepository;
use App\Repository\Eloquent\ReferenceUserChooseRepository;
use App\Repository\Eloquent\Repository;
use App\Repository\Eloquent\ResearchPaperDepartmentRepository;
use App\Repository\Eloquent\ResearchPaperRepository;
use App\Repository\Eloquent\RolesAroundTheWorldRepository;
use App\Repository\Eloquent\SettingRepository;
use App\Repository\Eloquent\SliderRepository;
use App\Repository\Eloquent\SurveyRequestRepository;
use App\Repository\Eloquent\UserRepository;
use App\Repository\Eloquent\ValueRepository;
use App\Repository\Eloquent\VideoRepository;
use App\Repository\Eloquent\VisionRepository;
use App\Repository\EntityRepositoryInterface;
use App\Repository\EntityVisitorRepositoryInterface;
use App\Repository\FaisalHomePageDocumentRepositoryInterface;
use App\Repository\FaisalHomePageImageRepositoryInterface;
use App\Repository\FaisalHomePageSoundRepositoryInterface;
use App\Repository\FaisalHomePageVideoRepositoryInterface;
use App\Repository\FaisalHomeRepositoryInterface;
use App\Repository\HonoraryDegreeRepositoryInterface;
use App\Repository\InformationRequestRepositoryInterface;
use App\Repository\ManagementRepositoryInterface;
use App\Repository\MediaCenterDepartmentRepositoryInterface;
use App\Repository\MemberShipRequestRepositoryInterface;
use App\Repository\MessageRepositoryInterface;
use App\Repository\NewRepositoryInterface;
use App\Repository\OrderRepositoryInterface;
use App\Repository\PaymentRepositoryInterface;
use App\Repository\PointOfSalePhoneRepositoryInterface;
use App\Repository\PointOfSaleRepositoryInterface;
use App\Repository\PreviousEventRepositoryInterface;
use App\Repository\ReferenceRepositoryInterface;
use App\Repository\ReferenceUserChooseRepositoryInterface;
use App\Repository\RepositoryInterface;
use App\Repository\AdminRepositoryInterface;
use App\Repository\Eloquent\AboutUsInformationRepository;
use App\Repository\Eloquent\MessageDepositRepository;
use App\Repository\Eloquent\UniversityMessagesRepository;
use App\Repository\MessageDepositRepositoryInterface;
use App\Repository\ResearchPaperDepartmentRepositoryInterface;
use App\Repository\ResearchPaperRepositoryInterface;
use App\Repository\RolesAroundTheWorldRepositoryInterface;
use App\Repository\SettingRepositoryInterface;
use App\Repository\SliderRepositoryInterface;
use App\Repository\SurveyRequestRepositoryInterface;
use App\Repository\UniversityMessagesRepositoryInterface;
use App\Repository\UserRepositoryInterface;
use App\Repository\ValueRepositoryInterface;
use App\Repository\VideoRepositoryInterface;
use App\Repository\VisionRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(RepositoryInterface::class, Repository::class);
        $this->app->singleton(AdminRepositoryInterface::class, AdminRepository::class);
        $this->app->singleton(UserRepositoryInterface::class, UserRepository::class);
        $this->app->singleton(SettingRepositoryInterface::class, SettingRepository::class);
        $this->app->singleton(BookCategoryRepositoryInterface::class, BookCategoryRepository::class);
        $this->app->singleton(CityRepositoryInterface::class, CityRepository::class);
        $this->app->singleton(AuthorRepositoryInterface::class, AuthorRepository::class);
        $this->app->singleton(BookStoreRepositoryInterface::class, BookStoreRepository::class);
        $this->app->singleton(PointOfSaleRepositoryInterface::class, PointOfSaleRepository::class);
        $this->app->singleton(PointOfSalePhoneRepositoryInterface::class, PointOfSalePhoneRepository::class);
        $this->app->singleton(ContactRepositoryInterface::class, ContactRepository::class);
        $this->app->singleton(EntityRepositoryInterface::class, EntityRepository::class);
        $this->app->singleton(EntityVisitorRepositoryInterface::class, EntityVisitorRepository::class);
        $this->app->singleton(AntiqueRepositoryInterface::class, AntiqueRepository::class);
        $this->app->singleton(SliderRepositoryInterface::class, SliderRepository::class);
        $this->app->singleton(MessageRepositoryInterface::class, MessageRepository::class);
        $this->app->singleton(ValueRepositoryInterface::class, ValueRepository::class);
        $this->app->singleton(VisionRepositoryInterface::class, VisionRepository::class);
        $this->app->singleton(AboutUsInformationRepositoryInterface::class, AboutUsInformationRepository::class);
        $this->app->singleton(AboutUsInformationRepositoryInterface::class, AboutUsInformationRepository::class);
        $this->app->singleton(UniversityMessagesRepositoryInterface::class, UniversityMessagesRepository::class);
        $this->app->singleton(MessageDepositRepositoryInterface::class, MessageDepositRepository::class);
        $this->app->singleton(ResearchPaperDepartmentRepositoryInterface::class, ResearchPaperDepartmentRepository::class);
        $this->app->singleton(ResearchPaperRepositoryInterface::class, ResearchPaperRepository::class);
        $this->app->singleton(NewRepositoryInterface::class, NewRepository::class);
        $this->app->singleton(PreviousEventRepositoryInterface::class, PreviousEventRepository::class);
        $this->app->singleton(VideoRepositoryInterface::class, VideoRepository::class);
        $this->app->singleton(AnnualOfferRepositoryInterface::class, AnnualOfferRepository::class);
        $this->app->singleton(ChairmanOfTheBoardRepositoryInterface::class, ChairmanOfTheBoardRepository::class);
        $this->app->singleton(AwardRepositoryInterface::class, AwardRepository::class);
        $this->app->singleton(CenterDateRepositoryInterface::class, CenterDateRepository::class);
        $this->app->singleton(ChairmanOfTheBoardNewRepositoryInterface::class, ChairmanOfTheBoardNewRepository::class);
        $this->app->singleton(HonoraryDegreeRepositoryInterface::class, HonoraryDegreeRepository::class);
        $this->app->singleton(ManagementRepositoryInterface::class,  ManagementRepository::class);
        $this->app->singleton(RolesAroundTheWorldRepositoryInterface::class,  RolesAroundTheWorldRepository::class);
        $this->app->singleton(OrderRepositoryInterface::class,  OrderRepository::class);
        $this->app->singleton(CouponRepositoryInterface::class,CouponRepository::class);
        $this->app->singleton(MemberShipRequestRepositoryInterface::class,MemberShipRequestRepository::class);
        $this->app->singleton(InformationRequestRepositoryInterface::class,InformationRequestRepository::class);
        $this->app->singleton(SurveyRequestRepositoryInterface::class,SurveyRequestRepository::class);
        $this->app->singleton(ReferenceRepositoryInterface::class,ReferenceRepository::class);
        $this->app->singleton(ReferenceUserChooseRepositoryInterface::class,ReferenceUserChooseRepository::class);
        $this->app->singleton(FaisalHomeRepositoryInterface::class,FaisalHomeRepository::class);
        $this->app->singleton(FaisalHomePageDocumentRepositoryInterface::class,FaisalHomePageDocumentRepository::class);
        $this->app->singleton(FaisalHomePageImageRepositoryInterface::class,FaisalHomePageImageRepository::class);
        $this->app->singleton(FaisalHomePageSoundRepositoryInterface::class,FaisalHomePageSoundRepository::class);
        $this->app->singleton(FaisalHomePageVideoRepositoryInterface::class,FaisalHomePageVideoRepository::class);
        $this->app->singleton(CartRepositoryInterface::class,CartRepository::class);
        $this->app->singleton(AntiqueImageRepositoryInterface::class,AntiqueImageRepository::class);
        $this->app->singleton(CartContentRepositoryInterface::class,CartContentRepository::class);
        $this->app->singleton(CouponUsageRepositoryInterface::class,CouponUsageRepository::class);
        $this->app->singleton(PaymentRepositoryInterface::class,PaymentRepository::class);
        $this->app->singleton(AboutChairmanOfTheBoardRepositoryInterface::class,AboutChairmanOfTheBoardRepository::class);
        $this->app->singleton( AspirationRepositoryInterface::class, AspirationRepository::class);
        $this->app->singleton( MediaCenterDepartmentRepositoryInterface::class, MediaCenterDepartmentRepository::class);
    }


    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
