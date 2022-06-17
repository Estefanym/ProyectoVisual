<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cita extends Model
{
    use HasFactory;
    protected $table='cita';
    protected $primaryKey = 'id_cita';
    protected $fillable=['dia','sucursal','id_tecnico','id_reparacion'];
    public $timestamps = false;
}
