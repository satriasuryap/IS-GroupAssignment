<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PDF extends Model
{
    protected $table = 'pdf';
    public $timestamps = false;
    protected $fillable = [
        'file',
    ];
}
