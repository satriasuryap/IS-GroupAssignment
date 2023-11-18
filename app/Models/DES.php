<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class DES extends Model
{
    use HasFactory, HasApiTokens, Notifiable;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'des';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'img',
        'file',
        'video',
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
