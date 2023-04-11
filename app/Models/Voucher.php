<?php

namespace App\Models;

use App\Models\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voucher extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function tokos(){
        return $this->belongsTo(Toko::class,'toko','id');
    }
    public function kategoris(){
        return $this->belongsTo(Kategori::class,'kategori','id');
    }
    // public function getmasakadaluarsaAttribute($value){
    //     return Carbon::parse($value)->translatedFormat('d F Y');
    // }
    // public function setmasakadaluarsaAttribute($value){
    //     $this->attributes['masa_kadaluarsa'] = Carbon::createFromFormat('d F Y', $value, 'Asia/Jakarta')->format('Y-m-D');
    // }
}
