<?php
namespace App\Traits;

use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongsToCategory {
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
