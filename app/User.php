<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
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

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

    public function isAdmin()
    {
        if ($this->role->name == 'admin') {
        return true;
        }
        return false;
    }

    public function isModerator()
    {
        if ($this->role->name == 'moderator') {
        return true;
        }
        return false;
    }

    public function makeModerator()
    {
        $moderatorRole = Role::where('name', 'moderator')->first();
        $this->role_id = $moderatorRole->id;
        $this->save();
    }

    public function makeUser()
    {
        $userRole = Role::where('name', 'user')->first();
        $this->role_id = $userRole->id;
        $this->save();
    }
    public function makeAdmin()
    {
        $adminRole = Role::where('name', 'admin')->first();
        $this->role_id = $adminRole->id;
        $this->save();
    }
}
