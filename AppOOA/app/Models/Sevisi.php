<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sevisi extends Model
{
    protected $guarded=[];
    use HasFactory;

    public function brodica(){
        return $this->belongsTo(Brodica::class,'idBrodice');
    }
}
