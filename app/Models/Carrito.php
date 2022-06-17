<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;
    protected $table='carrito';
    protected $primaryKey = 'id';
    protected $fillable=['nombre','cantidad','descripcion','precio','imagen'];
    public $timestamps = false;
}
