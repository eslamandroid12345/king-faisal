<?php

namespace Database\Seeders;

use App\Models\MemberShipRequest;
use App\Models\Payment;
use App\Models\RequestInformation;
use App\Models\Setting;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RequestInformationTableSeeder extends Seeder
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
            $requestInformation = RequestInformation::create([
                'full_name' => $user->full_name,
                'email' => $user->email,
                'phone' => $user->phone,
                'total_amount' => $setting->information_request,
                'status' => $i == 1 ? 'finished' : 'new',
                'university' => 'King Faisal University',
                'request_information_subject' => 'Tourism',
                'request_information_attachments' => 'storage/request_information_attachments/pdf/'.$i.'.pdf',
                'user_id' => $user->id

            ]);

        }
    }
}
