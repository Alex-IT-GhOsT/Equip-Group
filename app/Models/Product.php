<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['id_group', 'name'];

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class, 'id_group');
    }
}
