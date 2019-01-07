<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function perfil(){
        return $this->belongsTo('App\Perfil');
    }

    public function recetas(){
        return $this->hasMany('App\Receta');
    }

    public function panaderias(){
        return $this->hasMany('App\Panaderia');
    }

    public function comentarios(){
        return $this->belongsToMany('App\Comentario');
    }

        public function comentario(){
        return $this->hasOne('App\Comentario');
    }

}
