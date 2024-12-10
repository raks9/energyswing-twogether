<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PowerData extends Model
{
    use HasFactory;

    // Izinkan kolom berikut untuk mass assignment
    protected $fillable = ['month', 'power'];
}
