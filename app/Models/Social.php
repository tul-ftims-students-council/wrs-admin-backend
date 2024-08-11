<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $primaryKey = "social_name";
    protected $keyType = "string";
    protected $hidden = ['created_at', 'updated_at'];
}
