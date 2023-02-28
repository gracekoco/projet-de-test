<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{




    public $fillable = [
        'name',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'salle',

        ];






 }

