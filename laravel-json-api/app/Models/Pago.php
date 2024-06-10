<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
    protected $table = 'pagos';
    protected $fillable = ['persona_id', 'pagina_id', 'monto', 'horas_trabajadas', 'porcentaje_ganancia'];

    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

    public function pagina()
    {
        return $this->belongsTo(Pagina::class);
    }
    public function tipoCambio()
    {
        return $this->belongsTo(TipoCambio::class);
    }
}
