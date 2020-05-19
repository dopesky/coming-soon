<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class User
 * @package App
 * @mixin Builder
 * @property boolean $suspended
 * @property string $email
 */
class User extends Authenticatable {
    use Notifiable;

    protected $table = 'tbl_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['suspended' => 'boolean', 'updated_at' => 'timestamp', 'created_at' => 'timestamp'];
}
