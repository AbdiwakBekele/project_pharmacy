<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrugType extends Model
{
    use HasFactory;
    protected $table='drug_types';
    protected $fillable = [
        'catagory_id',
        'unit_id',
        'slug',
        'brand_name',
         'generic_name',
         'dosage',
         'price',];

         public function catagory(){
            return $this->belongsTo(Catagory::class,'catagory_id','id');
         }
         public function unit(){
            return $this->belongsTo(Unit::class,'unit_id','id');
         }
         public function drugs(){
            return $this->hasMany(Drug::class,'drugTypes_id','id');
        }
        public function drugsales(){
         return $this->hasMany(DrugSales::class,'drug_id','id');
     }
}
