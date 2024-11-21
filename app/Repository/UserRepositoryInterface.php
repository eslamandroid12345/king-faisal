<?php

namespace App\Repository;

interface UserRepositoryInterface extends RepositoryInterface
{

    public function users();
    public function members();

}
