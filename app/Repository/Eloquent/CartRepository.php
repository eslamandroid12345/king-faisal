<?php

namespace App\Repository\Eloquent;
use App\Http\Traits\Response;
use App\Models\Cart;
use App\Repository\CartRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class CartRepository extends Repository implements CartRepositoryInterface
{

    use Response;

    protected Model $model;

    public function __construct(Cart $model)
    {
        parent::__construct($model);
    }


    public function checkProductAddToCart($itemId,$itemValue): int
    {

          return  $this->model::query()
                ->where('user_id','=',userId())
                ->whereRelation('items',$itemId,'=',$itemValue)
              ->count();


    }


}
