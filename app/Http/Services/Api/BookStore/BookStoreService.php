<?php

namespace App\Http\Services\Api\BookStore;

use App\Http\Resources\BookCategory\BookCategoryResource;
use App\Http\Resources\BookStore\BookStoreCollection;
use App\Http\Resources\BookStore\BookStoreShowResource;
use App\Http\Resources\PointOfSale\CityResource;
use App\Http\Services\Mutual\GetService;
use App\Repository\BookCategoryRepositoryInterface;
use App\Repository\BookStoreRepositoryInterface;
use App\Repository\CityRepositoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

abstract class BookStoreService
{


    public function __construct(
       private readonly BookStoreRepositoryInterface    $bookStoreRepository,
       private readonly GetService                      $getService,
       private readonly BookCategoryRepositoryInterface $bookCategoryRepository,
       private readonly CityRepositoryInterface         $cityRepository
    )
    {
    }

    public function getAllCategories(): JsonResponse
    {

        return $this->getService->handle(resource: BookCategoryResource::class,repository: $this->bookCategoryRepository,method: 'paginate',message: __('user.show_success'));
    }


    public function getAllBooks(): JsonResponse
    {

        return $this->getService->handle(resource: BookStoreCollection::class,repository: $this->bookStoreRepository,method: 'getAllBooks',is_instance: true,message: __('user.show_success'));
    }


    public function showOneBook($id): JsonResponse
    {

        return $this->getService->handle(resource: BookStoreShowResource::class,repository: $this->bookStoreRepository,method: 'getById',parameters: [$id],is_instance: true,message: __('user.show_success'));
    }


    public function pointOfSales(): JsonResponse
    {

        return $this->getService->handle(resource: CityResource::class,repository: $this->cityRepository,method: 'getAll',parameters: [['*'],['pointOfSales.phones']],message: __('user.show_success'));

    }

}
