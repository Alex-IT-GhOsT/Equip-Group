<?php

namespace App\Services;

use App\Contracts\GroupRepositoryInterface;
use App\Contracts\ServicesInterface\GroupServiceInterface;
use Illuminate\Support\Collection;

class GroupService implements GroupServiceInterface
{
    public function __construct(
        private readonly GroupRepositoryInterface $groupRepository
    ){}
    public function allGroups(): Collection
    {
        return $this->groupRepository->all();
    }

    public function getRootGroup(): Collection
    {
        return $this->groupRepository->getRootGroup();
    }

    public function getGroupWithChildrenCount(): Collection
    {
        $groups = $this->getRootGroup();

        foreach ($groups as $group) {
            $group->total_children_count = $group->totalChildrenCount();
        }
        return $groups;
    }
}
