<?php

namespace App\Repositories;

use App\Contracts\GroupRepositoryInterface;
use App\Models\Group;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class GroupRepository implements GroupRepositoryInterface
{

    public function all(): Collection
    {
        return Group::all();
    }

    public function find(int $id): ?Group
    {
        return Group::find($id);
    }

    public function paginate(int $perPage = 6): LengthAwarePaginator
    {
        return Group::paginate($perPage);
    }
}
