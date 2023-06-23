<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $table='units';
    protected $fillable=[
        'unit_name',
        'slug',
        'unit_description',
    ];
    public function drugtypes(){
        return $this->hasMany(DrugType::class,'unit_id','id');
    }
}
