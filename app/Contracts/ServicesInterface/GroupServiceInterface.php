<?php

namespace App\Contracts\ServicesInterface;

use Illuminate\Support\Collection;

interface GroupServiceInterface
{
    public function allGroups(): Collection;
    public function getRootGroup(): Collection;
    public function getGroupWithChildrenCount(): Collection;
}
