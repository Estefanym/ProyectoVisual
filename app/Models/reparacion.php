<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reparacion extends Model
{
    use HasFactory;
    protected $table='reparacion';
    protected $primaryKey = 'id_reparacion';
    protected $fillable=['precio','descripcion'];
    public $timestamps = false;
}
