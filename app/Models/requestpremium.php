<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requestpremium extends Model
{
    protected $table = 'requestpremium';
    protected $fillable = [
        'name',
        'email',
        'alasan'
    ];
}
