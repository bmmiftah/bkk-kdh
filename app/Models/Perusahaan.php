<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Perusahaan extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function lowongan()
    {
        return $this->hasMany(Lowongan::class);
    }

    public function informasi()
    {
        return $this->hasMany('Informasi::class');
    }
}