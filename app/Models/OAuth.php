<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class OAuth extends Authenticatable
{
  protected $fillable = [
    'type',
    'openid',
    'nickname',
    'avatar',
  ];
}
