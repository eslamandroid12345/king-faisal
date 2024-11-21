<?php

namespace App\Http\Controllers\Api\BookStore;

use App\Http\Controllers\Controller;
use App\Http\Services\Api\BookStore\BookStoreService;
use Symfony\Component\HttpFoundation\JsonResponse;

class BookStoreController extends Controller
{


    protected BookStoreService $bookStoreService;

    public function __construct(BookStoreService $bookStoreService)
    {
        $this->bookStoreService = $bookStoreService;
    }


    public function getAllCategories(): JsonResponse{

        return $this->bookStoreService->getAllCategories();
    }

    public function getAllBooks(): JsonResponse{

        return $this->bookStoreService->getAllBooks();
    }

    public function showOneBook($id): JsonResponse{

        return $this->bookStoreService->showOneBook($id);
    }

    public function pointOfSales(){

        return $this->bookStoreService->pointOfSales();

    }






}
