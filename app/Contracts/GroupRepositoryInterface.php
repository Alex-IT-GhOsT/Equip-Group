<?php

namespace App\Contracts;

use App\Models\Group;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface GroupRepositoryInterface
{
    public function all(): Collection;
    public function find(int $id): ?Group;
    public function paginate(int $perPage = 6): LengthAwarePaginator;
}
