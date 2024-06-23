<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use BezhanSalleh\FilamentShield\Traits\HasPanelShield;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;
    use HasPanelShield;

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
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Relación uno a muchos
    public function programs()
    {
        return $this->hasMany('App\Models\programs');
    }

    // Relación uno a muchos
    public function courses()
    {
        return $this->hasMany('App\Models\Course');
    }

    // Relación uno a muchos
    public function sections()
    {
        return $this->hasMany('App\Models\Section');
    }

    // Relación uno a muchos
    public function lessons()
    {
        return $this->hasMany('App\Models\Lesson');
    }

    // relacion uno a uno
    public function profile()
    {
        return $this->hasOne('App\Models\Profile');
    }

    // Relacion uno a muchos
    public function courses_dictated()
    {
        return $this->hasMany('App\Models\Course');
    }

    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

    public function reactions()
    {
        return $this->hasMany('App\Models\Reaction');
    }

    // Relacion muchos a muchos
    public function courses_enrolled()
    {
        return $this->belongsToMany('App\Models\Course');
    }
}
