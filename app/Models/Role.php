<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/** @property-read \Illuminate\Database\Eloquent\Collection<int, Admin> $admins */

class Role extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'status',
    ];

    /**
     * Get the admins for the role.
     */
    public function admins()
    {
        return $this->hasMany(Admin::class, 'role_id');
    }
}
