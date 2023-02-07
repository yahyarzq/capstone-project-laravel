<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Usulan extends Model
{
    use HasFactory;
    protected $collection = 'usulans';
    // protected $primaryKey = '_id';
    protected $guarded = ['_id'];

    public function desa(){
        return $this->belongsTo(Desa::class,'Desa_id');
    }
}
