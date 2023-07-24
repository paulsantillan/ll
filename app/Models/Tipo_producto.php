<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_producto extends Model
{
    use HasFactory;
    protected $fillable=['tipo'];
    public $table="tipo_productos";
    public $timestamps=false;
}
