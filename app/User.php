<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    protected $fillable = [
        'name', 'email',
    ];

    protected $hidden = [
        'password',
    ];


    /**
     * 当账号为admin时返回true,即指明admin为超级权限管理员，无视任何框架内的权限约束
     * @return bool
     */
    public function getIsAdminAttribute()
    {
        return $this->username === 'admin';
    }

}
