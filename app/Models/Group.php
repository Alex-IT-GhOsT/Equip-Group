<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

class Group extends Model
{
    use HasFactory;

    protected $table = 'groups';
    protected $fillable = ['id_parent', 'name'];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'id_group');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Group::class, 'id_parent');
    }

    public function children(): HasMany
    {
        return $this->hasMany(Group::class, 'id_parent');
    }

    public function allChildren(): Collection
    {
        $all = collect();

        foreach ($this->children() as $child) {
            $all->push($child);
            $all = $all->merge($child->allChildren());
        }

        return $all;
    }

}
