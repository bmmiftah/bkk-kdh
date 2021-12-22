<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Informasi extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
   
    public function Perushaan()
    {
        return $this->belongsTo(Perusahaan::class);
    }
}
