<?php

namespace Database\Seeders;

use App\Models\Coupon;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CouponTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0 ;$i <= 4 ; $i++){

            Coupon::create([
                'coupon_code' => '#8bClGfT'.$i,
                'discount_type' => 'per',
                'discount_value' => 10.00,
                'start_date' => Carbon::now()->format('Y-m-d'),
                'end_date' => Carbon::now()->addDays(30)->format('Y-m-d'),
                'max_usage' => 20
            ]);
        }
    }
}
