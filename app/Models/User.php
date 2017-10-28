<?php

namespace Rhino\Models;

use Rhino\Models\Role;
use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password', 'role_id', 'age', 'address', 'phone', 'birthday','city','colonia','postal'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','address','age','phone'
    ];
    
    /**
     * Get the user that owns the phone.
     */
    public function checkin()
    {
        return $this->hasMany('Rhino\Models\Checkin');
    }

    /**
     * Get the user that owns the phone.
     */
    public function isAdmin()
    {
        return $this->where('role_id',1);
    }

    /**
     * Get the user that owns the phone.
     */
    public function isCoordinator()
    {
        return $this->where('role_id',2);
    }
}
