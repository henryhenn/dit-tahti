<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['kategori'];

    public function ditreskrimum()
    {
        return $this->hasMany(Ditreskrimum::class);
    }

    public function ditreskrimsus()
    {
        return $this->hasMany(Ditreskrimsus::class);
    }

    public function ditlantas()
    {
        return $this->hasMany(Ditlantas::class);
    }

    public function ditpolairud()
    {
        return $this->hasMany(Ditpolairud::class);
    }

    public function ditresnarkoba()
    {
        return $this->hasMany(Ditresnarkoba::class);
    }
}
