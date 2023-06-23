<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrugSales extends Model
{
    use HasFactory;
    protected $table='drug_sales';
    protected $fillable=[
        'drug_id',
        'amount',
        'slug',
       
        'price',
    ];
    public function drugs(){
        return $this->belongsTo(DrugType::class,'drug_id','id');
     }
}
