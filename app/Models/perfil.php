<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perfil extends Model
{
    use HasFactory;
    protected $table = "perfil";
    protected $guarded = [];
    public $timestamps = false;
}
