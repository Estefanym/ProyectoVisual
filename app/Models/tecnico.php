<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tecnico extends Model
{
    use HasFactory;
    protected $table='tecnico';
    protected $primaryKey = 'id_tecnico';
    protected $fillable=['nombre'];
    public $timestamps = false;

}
