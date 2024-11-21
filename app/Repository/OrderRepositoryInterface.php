<?php

namespace App\Repository;

interface OrderRepositoryInterface extends RepositoryInterface
{

    public function order_details($id);

    public function payment_details($id);

    public function in_progress_status($id);

    public function finished_status($id);


    public function refused_status($id);


}
