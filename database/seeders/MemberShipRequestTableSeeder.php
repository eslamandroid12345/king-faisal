<?php

namespace Database\Seeders;

use App\Models\MemberShipRequest;
use App\Models\Payment;
use App\Models\Setting;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MemberShipRequestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $setting = Setting::first();

         for ($i = 1 ; $i <= 10 ; $i++){

             $user = User::query()->findOrFail($i);
             $memberShipRequest = MemberShipRequest::create([
                 'full_name' => $user->full_name,
                 'email' => $user->email,
                 'years_of_subscription' => 2,
                 'phone' => $user->phone,
                 'total_amount' => $setting->membership_request * 2,
                 'status' => 'new',
                 'academic_organization' => 'King Faisal University',
                 'academic_degree' => 'master',
                 'user_id' => $user->id

             ]);

         }
    }
}
