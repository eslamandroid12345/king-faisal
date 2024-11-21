<?php

namespace App\Repository\Eloquent;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Payment;
use App\Repository\OrderRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class OrderRepository extends Repository implements OrderRepositoryInterface
{
    protected Model $model;

    public function __construct(Order $model)
    {
        parent::__construct($model);
    }


    public function order_details($id){

        return OrderDetail::query()
            ->where('order_id','=',$id)
            ->with(['book_store','antique'])
            ->paginate(10);

    }


    public function payment_details($id){

        return Payment::query()
            ->where('order_id','=',$id)
            ->with(['order'])
            ->first();

    }



    public function in_progress_status($id){

        $order = Order::query()->findOrFail($id);

        $order->update(['status' => 'in_progress']);

    }


    public function finished_status($id){

        $order = Order::query()->findOrFail($id);

        $order->update(['status' => 'finished']);

        $payment = Payment::query()
            ->where('order_id','=',$order->id)
            ->first();

        $payment->update(['transaction_status' => 'finished']);


    }


    public function refused_status($id){

        $order = Order::query()->findOrFail($id);

        $order->update(['status' => 'refused']);

        $payment = Payment::query()
            ->where('order_id','=',$order->id)
            ->first();

        $payment->update(['transaction_status' => 'failed']);

    }


}
