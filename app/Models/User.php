<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use PhpParser\Node\Expr\FuncCall;


class User extends Authenticatable
{
    
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'tel',
        'address',
        'message',
        'facebook',
        'twitter',
        'github',
        'personaldescription',
        'service',
        'servicedescription',
        'title_whatido',
        'title_aboutme',
        'professionalname',
        'professionalpercent',
        'percent',
        'name',
        'title_job',   
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function skill(){
     return $this->hasMany(Skill::class, 'user_id', 'id');   
    }

    public function education(){
        return $this->hasMany(Educacion::class, 'user_id', 'id');
    }

    public function aboutme(){
        return $this->hasMany(Aboutme::class, 'user_id', 'id');
    }

    public function workexperience(){
        return $this->hasMany(Workexperience::class, 'user_id', 'id');
    }

    public function blog(){
        return $this->hasMany(Blog::class, 'user_id', 'id');
    }

    public function contactme(){
        return $this->hasMany(Contactme::class, 'user_id', 'id');
    }

    public function getGetimageAttribute($key)
    {
     if($this->image){
         return url("storage/$this->image");
     }
    }   

     public function getUppercaseAttribute($key)
    {
     
         return strtoupper($this->name);
    }
}
