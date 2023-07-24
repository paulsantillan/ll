<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable=['nombre','precio','cantidad','fecha_ingreso','id_tiposProducto'];
    public $table="productos";
    public $timestamps=false;
}
