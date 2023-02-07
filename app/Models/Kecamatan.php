<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function desas (){
        return $this->hasMany(Desa::class);
    }
    public function usulans(){
        return $this->hasMany(Usulan::class,'Kecamatan_id');
    }
}
