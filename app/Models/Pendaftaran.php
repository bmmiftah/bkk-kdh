<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pendaftaran extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function perusahaans()
    {
        return $this->belongsTo(Perusahaan::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }

}
