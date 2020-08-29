<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get logs created by the logged user and followed users
     * in descending order by date
     */
    public function feed()
    {
        $followed_users_ids = $this->follows()->pluck('id');

        return Log::whereIn('user_id', $followed_users_ids)
            ->orWhere('user_id', $this->id)
            ->latest()
            ->get();
    }

    public function timelines()
    {
        return $this->hasMany(Timeline::class);
    }

    public function logs()
    {
        return $this->hasMany(Log::class);
    }


    /**
     * Generate username from user's email address
     *
     * This method appends a random number at the end of the
     * username, if the previous iteration is taken.
     *
     * @param string $email
     * @param int|null $randNb
     * @return string
     */
    public static function generateUsername(String $email, $randNb = null)
    {
        $email_parts = explode('@', $email);
        $username = str_replace('.', '', $email_parts[0]);

        if(User::isTaken($username)) {
            $randNb = rand(0, 100);
            $username = $username.$randNb;

            User::generateUsername($email, $randNb);
        }

        return $username;
    }

    /**
     * Check if username is available
     *
     * @param string $username
     * @return bool
     */
    public static function isTaken(String $username)
    {
        return User::all()->contains('username', $username);
    }
}
