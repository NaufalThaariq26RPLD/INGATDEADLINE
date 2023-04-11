<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;




class User extends Authenticatable
{
    use HasFactory,Notifiable;
    protected $guarded=['id'];

    public function hasRole($role)
{
    return $this->roles()->where('name', $role)->exists();
}
    public function tokos(){
    return $this->belongsTo(Toko::class,'toko','id');
}

}
