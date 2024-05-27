<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCambio extends Model
{
    use HasFactory;
    protected $table = 'tipos_cambio';
    protected $fillable = ['fecha', 'valor_dolar', 'valor_euro'];

    public function pagos()
    {
        return $this->hasMany(Pago::class);
    }
}
