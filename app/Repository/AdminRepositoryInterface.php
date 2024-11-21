<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

interface AdminRepositoryInterface extends RepositoryInterface
{
    public function getCount(): int;
    public function getAdminList();



}
