<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;


class Lowongan extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $guarded = ['id'];

    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title_lowongan'
            ]
        ];
    }

    public function getRouteKeyName()
    {
    return 'slug';
    }
}
