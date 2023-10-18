<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\Constraint\Count;

class State extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'country_id',
        'name'
       
    ];
    protected $table='states';
    protected $primaryKey ='state_id';

}
