<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CData extends Model
{
    use HasFactory;

    protected $table =  'c_data'; //PERLU DIGANTI
    protected $primeryKey = 'id_data';
    protected $fillable = ['c_date', 'c_time', 'c_light', 'c_pump', 'c_atomizer', 'c_lightoff', 'c_pumpoff', 'c_atomizeroff'];
}
