<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class OAuth
 * @package App\Models
 * @mixin \Eloquent
 */
class OAuth extends Authenticatable
{
  protected $fillable = [
    'type',
    'openid',
    'nickname',
    'avatar',
  ];
}
