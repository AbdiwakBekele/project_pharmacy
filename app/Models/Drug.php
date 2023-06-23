<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    use HasFactory;
    protected $table='drugs';
    protected $fillable = [
        'drugTypes_id',
        'batch_number',
        'slug',
        'manufacture_date',
        'expire_date',
         'amount',
         ];

         public function drugtype(){
            return $this->belongsTo(DrugType::class,'drugTypes_id','id');
         }
}
