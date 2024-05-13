<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'personas';
    protected $fillable = ['nombre', 'tipo_documento', 'documento'];

    public function perfiles()
    {
        return $this->belongsToMany(Perfil::class, 'personas_perfiles');
    }

    public function pagos()
    {
        return $this->hasMany(Pago::class);
    }
}
