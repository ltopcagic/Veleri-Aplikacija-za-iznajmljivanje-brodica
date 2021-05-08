<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brodica extends Model
{
    protected $guarded=[];
    use HasFactory;

    public function servisi(){
        return $this->hasMany(Servisi::class,'brodicaID','id');
    }
    public function ciscenja(){
        return $this->hasMany(Ciscenja::class,'brodicaID','id');
    }
}
