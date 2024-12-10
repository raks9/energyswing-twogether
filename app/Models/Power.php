<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Power extends Model
{
    use HasFactory;

    protected $table = 'powers'; // Pastikan tabel diarahkan ke 'powers'
    protected $fillable = ['daya', 'created_at'];
}
