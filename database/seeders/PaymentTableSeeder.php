<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::create([
            'is_confirmed' => 1,
            'total_amount' => 40,
            'payment_type' => 'CASH',
            'receipt_image' => 'storage/receipts/images/1.jpg',
            'bank_account_name' => 'اسلام محمد رجب',
            'bank_account_number' => 327542367,
            'from_bank' => 'مصرف الراجحي',
            'to_bank' => 'مصرف جده الاسلامي',
            'transfer_date' => '2024-05-07',
            'transfer_time' => '13:37:18',
            'request_information_id' => 1,
        ]);
    }
}
