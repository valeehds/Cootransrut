<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personas extends Model
{
    use HasFactory;
    protected $fillable=['idPersona','tipoPersona','nombrePersona','apellidoPersona',
    'docuementoPersona','numLicencia','fechaNacimiento','fechaAfiliacion','estado'];
    protected $primaryKey='idPersona';
}
