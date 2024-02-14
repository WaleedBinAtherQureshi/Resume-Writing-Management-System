<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public static function getEnumValues($column)
    {
        $type = DB::select(DB::raw("SHOW COLUMNS FROM " . (new self)->getTable() . " WHERE Field = '{$column}'"))[0]->Type;

        $values = [];

        if (Str::startsWith($type, "enum(")) {
            foreach (explode(',', substr($type, 5, -1)) as $option) {
                $values[] = trim($option, "'");
            }
        }

        return $values;
    }
    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // Add 'role' to $fillable
        'user_type', // Add 'user_type' to $fillable
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
}
