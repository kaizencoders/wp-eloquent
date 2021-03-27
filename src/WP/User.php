<?php

namespace KaizenCoders\ORM\WP;


use KaizenCoders\ORM\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = 'ID';
    protected $timestamp = false;

    public function meta()
    {
        return $this->hasMany('KaizenCoders\ORM\WP\UserMeta', 'user_id');
    }
}