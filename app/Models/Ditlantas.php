<?php

namespace App\Models;

use App\Traits\BelongsToCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ditlantas extends Model
{
    use HasFactory, BelongsToCategory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
}
