<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
   use HasFactory;
   protected $guarded =[];
   // Especificar la clave primaria
   protected $primaryKey = 'nPerCodigo';
}
