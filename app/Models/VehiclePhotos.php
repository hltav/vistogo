<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehiclePhotos extends Model
{
    
    protected $fillable = ['vehicledata_id', 'placa', 'dianteira', 'traseira', 'hodometro', 'foto_banco_dianteiro'];

    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class);
    }
}

