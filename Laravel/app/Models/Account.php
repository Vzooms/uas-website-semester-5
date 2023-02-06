<?php

namespace App\Models;

use App\Models\Role;
use App\Models\Gender;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = true;

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    protected $fillable = [
        'role_id',
        'gender_id',
        'first_name',
        'last_name',
        'email',
        'display_picture_link',
        'password',
        'remember_token',
    ];
}
