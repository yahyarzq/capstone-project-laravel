<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kecamatan(){
        return $this->belongsTo(Kecamatan::class,'Kecamatan_id');
    }

    public function usulans(){
        return $this->hasMany(Usulan::class,'Desa_id');
    }
}
