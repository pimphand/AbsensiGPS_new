<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katar extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'jabatan', 'alamat'];

    public function getNamaAttribute($value): string
    {
        return ucfirst($value);
    }

    public function getJabatanAttribute($value): string
    {
        return ucfirst($value);
    }
}
