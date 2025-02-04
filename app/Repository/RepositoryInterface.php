<?php

namespace App\Repository;

use Closure;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

interface RepositoryInterface
{
    public function getAll(array $columns = ['*'], array $relations = []): Collection;

    public function getActive(array $columns = ['*'], array $relations = []): Collection;

    public function getById(
        $modelId,
        array $columns = ['*'],
        array $relations = [],
        array $appends = []
    ): ?Model;

    public function get(
        $byColumn,
        $value,
        array $columns = ['*'],
        array $relations = [],
    ): \Illuminate\Contracts\Pagination\LengthAwarePaginator;


    public function getCollection(
        $byColumn,
        $value,
        array $columns = ['*'],
        array $relations = [],
    );


    public function first(
        $byColumn,
        $value,
        array $columns = ['*'],
        array $relations = [],
    ): Builder|Model|null;

    public function create(array $payload): ?Model;

    public function updateOrCreate(array $keysUnique, array $payload);


    public function insert(array $payload): bool;

    public function getFirst(): ?Model;

    public function update($modelId, array $payload): bool;

    public function delete($modelId, array $filesFields = []): bool;

    public function forceDelete($modelId, array $filesFields = []);

    public function paginate(int $perPage = 10, array $relations = [], $orderBy = 'DESC', $columns = ['*']);


    public function paginateWithQuery(
        $query,
        int $perPage = 10,
        array $relations = [],
        $orderBy = 'ASC',
        $columns = ['*'],
    );

    public function whereHasMorph($relation, $class);

    public function multipleLanguages($model,$request,array $attributes): void;

    public function getCountModel($column = null,$value = null): int;

    public function getCountToday($column = null,$value = null): int;
}
