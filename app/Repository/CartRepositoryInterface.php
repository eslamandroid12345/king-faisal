<?php

namespace App\Repository;

interface CartRepositoryInterface extends RepositoryInterface
{


    public function checkProductAddToCart($itemId,$itemValue);


}
