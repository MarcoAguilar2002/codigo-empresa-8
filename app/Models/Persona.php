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

   /**
    * Scope para filtrar personas activas
    */
   public function scopeActivas($query)
   {
       return $query->where('cPerEstado', '1');
   }

   /**
    * Scope para filtrar personas inactivas
    */
   public function scopeInactivas($query)
   {
       return $query->where('cPerEstado', '0');
   }
}
