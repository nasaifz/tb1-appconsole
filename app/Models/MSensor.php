<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MSensor extends Model
{
    use HasFactory;

    protected $table =  'm_sensors'; //PERLU DIGANTI
    protected $primeryKey = 'id_data';
    protected $fillable = ['date', 't_udara', 'rh_udara', 'cahaya', 't_akar1'];

}
