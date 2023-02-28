<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    public $table='Salles';


    public $fillable = [
        'name',
        'level',

        ];

       public function salle_R()
    {
        return $this->belongsTo(Reservation::class);
   }
}
