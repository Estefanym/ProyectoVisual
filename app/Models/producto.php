<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    protected $table='producto';
    protected $primaryKey = 'id_producto';
    protected $fillable=['nombre','categoria','descripcion','precio','existencia','imagen'];
    public $timestamps = false;
}
