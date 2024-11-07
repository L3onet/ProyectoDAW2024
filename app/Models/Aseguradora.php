<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aseguradora extends Model
{
    use HasFactory;
    // Nombre de la tabla
    protected $table = 'aseguradoras';
    //Indicar la clave primaria correcta
    protected $primaryKey = "clave_aseguradora";
    // Clave primaria no auto-incremental
    public $incrementing = false;
    // Tipo de clave primaria
    protected $keyType = 'int';
    // Los campos que pueden asignarse de forma masiva
    protected $fillable = [
        'clave_aseguradora',
        'nombre',
        'fecha_inicial',
        'fecha_final',
        'no_seguro',
    ];
    // Indicamos que las fechas deben ser tratadas como objetos de tipo Carbon
    protected $dates = ['fecha_inicial', 'fecha_final'];
}
