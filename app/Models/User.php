<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

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

    static function getTotalAdmin($user_type)
    {
       return  self::select('users.id')
                    ->where('user_type','=',$user_type)
                    ->where('is_delete','=',0)
                    ->count();  
                  
    }
    static public function getTokenSingle($remember_token)
     {
        return self::where('remember_token', '=', $remember_token)->first();
    }

    static public function getEmailSingle($email)
    {
        return self::where('email', '=', $email)->first();
    }

    static public function getSingle($id)
    {
        return self::find($id);
    }
    static function getmashirika() 
     {
        $return =  self::select('users.*')
                    ->where('user_type','=',1)
                    ->where('is_delete','=',0);
                    $return = $return-> orderBy('id', 'desc')
                    ->paginate(20);  
                    return $return;
    }
    public function getProfile() 
    {
        if(!empty($this->profile_pic) && file_exists('upload/profile/' .$this->profile_pic))
        {
            return url('upload/profile/'.$this->profile_pic);
        }
        else {
            return "";
        }
    }

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
        'password' => 'hashed',
    ];
}
