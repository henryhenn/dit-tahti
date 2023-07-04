<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DaftarBarang extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilterByBarangTemuanCategory($query)
    {
        $query->whereHas('category', function ($query) {
            return $query->where('kategori', 'Barang Temuan');
        });
    }

    public function scopeFilterByBarangTemuanSebagaiBarangBuktiCategory($query)
    {
        $query->whereHas('category', function ($query) {
            return $query->where('kategori', 'Barang Bukti');
        });
    }

    public function scopeSearch($query, $search)
    {
        $query->when($search ?? false, function ($query, $search) {
            $query->where('nama_barang_bukti', 'like', '%' . $search . '%')
                ->orWhere('nama_kendaraan', 'like', '%' . $search . '%')
                ->orWhere('noka_nosin', 'like', '%' . $search . '%');
        });
    }

    public function scopeGroupByUnit($query, $unit)
    {
        $query->when($unit ?? false, function ($query, $unit) {
            $query->where('unit', '=', $unit);
        });
    }
}
