<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleData extends Model
{
   
        protected $fillable = ['placa', 'chassi', 'renavam', 'uf', 'marca', 'modelo', 'km', 'nivel_comb'];
    
        public function condutor()
        {
            return $this->belongsTo(Condutor::class);
        }
    
        public function fotosVeiculo()
        {
            return $this->hasOne(FotoVeiculo::class);
        }
}
    
