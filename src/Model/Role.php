<?php

namespace Pavelmgn\LaravelRbac\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name', 'slug', 'description'];

    public function users()
    {
        return $this->belongsToMany(config('auth.providers.users.model'));
    }

    public function permissions()
    {
        return $this->belongsToMany('Pavelmgn\LaravelRbac\Model\Permission')->withTimestamps();
    }
}
