<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;
    protected $table="resume";
    protected $fillable = ['position'];
//     public $fillable = [
//       'first_name',
//       'last_name',
//       'designation',
//       'experience',
//       'phone',
//       'country',
//       'state',
//       'district',
//       'city',
//       'dob',
      
//   ];
 public function countrydata()
 {
    return $this->belongsTo(Country::class,'country','id');
 }
 public function statedata()
 {
    return $this->belongsTo(State::class,'state','state_id');
 }
 public function districtdata()
 {
    return $this->belongsTo(District::class,'district','district_id');
 }
 public function citydata()
 {
    return $this->belongsTo(City::class,'city','city_id');
 
   } 
}
