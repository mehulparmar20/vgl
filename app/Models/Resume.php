<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;
    protected $table="resume";
    protected $fillable = ['position'];
    
 public function country()
 {
    return $this->belongsTo(Country::class,'id','id');
 }
 public function state()
 {
    return $this->belongsTo(State::class,'id','state_id');
 }
 public function district()
 {
    return $this->belongsTo(District::class,'id','district_id');
 }
 public function city()
 {
    return $this->belongsTo(City::class,'id','city_id');
 
   } 
}
