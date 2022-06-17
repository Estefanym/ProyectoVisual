<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    use HasFactory;
    protected $table='pedido';
    protected $primaryKey = 'id_pedido';
    protected $fillable=['piezas','tipo_entrega','fecha_entrega','id_producto','id_cliente','id_garantia'];

}
