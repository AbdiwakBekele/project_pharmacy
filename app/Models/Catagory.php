<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    use HasFactory;
    protected $table='catagories';
    protected $fillable=[
        'catagory_name',
        'slug',
        'catagory_description',
    ];
    public function drugtypes(){
        return $this->hasMany(DrugType::class,'catagory_id','id');
    }
}
