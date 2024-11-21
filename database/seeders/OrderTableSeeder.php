<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */



    public function run()
    {
        $counter = 1;
        for ($i = 1 ; $i <= 10 ; $i++){

            for ($j = 1 ; $j <= 2 ; $j++){

               $order = Order::create([
                    'total_amount' => 8000.00,
                    'order_date' => Carbon::now()->format('Y-m-d'),
                    'status' => 'new',
                    'user_id' => $i,
                ]);

                for ($k = 1 ; $k <= 2 ; $k++){
                  OrderDetail::create([
                      'order_id' => $order->id,
                      'book_store_id' => $counter++,
                      'unit_price' => 2000,
                  ]);

                }

            }
        }
    }
}
