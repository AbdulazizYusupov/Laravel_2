<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';
    protected $fillable = ['group_id','key','name'];

    public function roles()
    {
        return $this->belongsToMany(User::class,'role_permissions','permission_id','role_id');
    }
    public function group()
    {
        return $this->belongsTo(Group::class,'group_id');
    }
}
