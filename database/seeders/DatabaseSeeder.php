<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AdminTableSeeder::class);
        $this->call(SettingTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(BookCategoryTableSeeder::class);
        $this->call(PointOfSaleTableSeeder::class);
        $this->call(PointOfSalePhoneTableSeeder::class);
        $this->call(AuthorTableSeeder::class);
        $this->call(BookStoreTableSeeder::class);
        $this->call(BookStoreTranslationTableSeeder::class);
        $this->call(EntityTableSeeder::class);
        $this->call(EntityVisitorTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        $this->call(AntiqueTableSeeder::class);
        $this->call(SliderTableSeeder::class);
        $this->call(AspirationTableSeeder::class);
        $this->call(AboutUsInformationTableSeeder::class);
        $this->call(UniversityMessageTableSeeder::class);
        $this->call(MessageDepositTableSeeder::class);
        $this->call(ResearchPaperDepartmentTableSeeder::class);
        $this->call(ResearchPaperTableSeeder::class);

        ########## Media Center Department #############
        $this->call(NewTableSeeder::class);
        $this->call(PreviousEventsTableSeeder::class);
        $this->call(VideoTableSeeder::class);
        $this->call(AnnualOfferTableSeeder::class);


        ################### About Center ###############
        $this->call(CenterDateTableSeeder::class);
        $this->call(ChairmanOfTheBoardTableSeeder::class);
        $this->call(RolesAroundTheWorldTableSeeder::class);
        $this->call(ChairmanOfTheBoardNewsTableSeeder::class);
        $this->call(AwardTableSeeder::class);
        $this->call(HonoraryDegreeTableSeeder::class);
        $this->call(ManagementTableSeeder::class);

        $this->call(CouponTableSeeder::class);

        $this->call(OrderTableSeeder::class);
        $this->call(MemberShipRequestTableSeeder::class);
        $this->call(RequestInformationTableSeeder::class);
        $this->call(PaymentTableSeeder::class);
        $this->call(SurveyRequestTableSeeder::class);
        $this->call(FaisalHomePageTableSeeder::class);
        $this->call(PageTableSeeder::class);


    }
}
