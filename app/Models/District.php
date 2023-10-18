<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'state_id',
        'district_name'
       
    ];
    protected $table='districts';
    protected $primaryKey ='district_id';

}
