<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Auth;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
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

    public function roles(){

        return $this->belongsToMany(related:Role::class,table:'role_user');
    }


    public function rolesShort(){

        return $this->roles->pluck('name')->collect();

    }

    public function assignRole($role){

        $this->roles()->syncWithoutDetaching(Role::where('name',$role)->firstOrFail()->id);
    }

    public function detechRole($role){

        $this->roles()->detech(Role::where('name',$role)->firstOrFail()->id);
    }

    public function hasAnyRoles($roles){
        if($this->roles()->whereIn('name', $roles)->first()){
            return true;
        }

        return false;
    }

    public function hasRole($role){
        if($this->roles()->where('name', $role)->first()){
            return true;
        }

        
        if(!$this->can(abilities:'create-posts'))
        {
            return ['message'=> 'Nemate dozvolu.'];
        }
        
        return false;
    }

    public function post() {
        return $this->hasMany(Post::class);
    }
    
    public function setPasswordAttribute($password) {
        $this->attributes['password'] = Hash::Make($password);
    }
    

}
