<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datatable extends Model
{
    use HasFactory;

    protected $table =  'm_sensors'; //PERLU DIGANTI
    protected $primeryKey = 'id_data';
    protected $fillable = ['date', 't_udara', 'rh_udara', 'cahaya', 't_akar1'];

}
