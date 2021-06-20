<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = ['forum_id','comment','nama'];
    public function Forum(){
        return $this->belongsTo(Forum::class, 'forum_id');
}
}
