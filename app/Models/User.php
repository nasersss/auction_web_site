<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function Policies(){
        return $this->hasMany(Product::class,'user_id');}

    public function profile()
    {
        return $this->hasOne(UserProfile::class,'user_id');
    }

    public function isAdmin()
    {
        if (!Auth::check()) {
            return false;
        }
        $users = User::where('id', Auth::user()->id)->get();
        foreach ($users as $user) {
            if ($user->role == 1 || $user->role == 0) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function isSuperAdmin()
    {
        if (!Auth::check()) {
            return false;
        }
        $users = User::where('id', Auth::user()->id)->get();
        foreach ($users as $user) {
            if ($user->role == 0) {
                return true;
            } else {
                return false;
            }
        }
    }
}
