<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Conductor extends Model
{


    use HasFactory, Notifiable;

    protected $table = 'conductor';

    protected $fillable = [
        'name', 
        'CPF', 
        'RG', 
        'phone',
        'direcction', 
        'CNH'
        

    ];
    
}