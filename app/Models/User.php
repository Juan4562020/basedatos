<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'correo_empresa', 'nombre_empresa','direccion_empresa','name_user'
        ,'url_logo'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password','created_at','updated_at'
    ];
}
