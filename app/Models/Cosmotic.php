<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cosmotic extends Model
{
    use HasFactory;
    protected $table='cosmotics';
    protected $fillable = [
        'cosmotic_name','slug', 'cosmotic_exp','amount','price',
    ];
    public function cosmoticsales(){
        return $this->hasMany(CosmoticSales::class,'cosmotic_id','id');
    }
   
}
