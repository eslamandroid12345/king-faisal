<?php

namespace App\Repository;

interface BookStoreRepositoryInterface extends RepositoryInterface
{

    public function getAllBookCategories();
    public function getAllAuthors();

    public function getAllBooks();

}
