<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $fillable = ['judul','isi','author'];
    public function Reply(){
        return $this->hashmany(Reply::class);
    }
}
