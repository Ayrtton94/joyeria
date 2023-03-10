<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Linea extends Model
{
    use HasFactory;
    protected $dates = ['deleted_at'];
    protected $fillable =['nombre', 'fecha','descripcion','status'];
}
