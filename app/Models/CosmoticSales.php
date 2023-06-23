<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CosmoticSales extends Model
{
    use HasFactory;
    protected $table='cosmotic_sales';
    protected $fillable=[
        'cosmotic_id',
        'amount',
        'slug',
       
        'price',
    ];
    public function cosmotic(){
        return $this->belongsTo(Cosmotic::class,'cosmotic_id','id');
     }
}
