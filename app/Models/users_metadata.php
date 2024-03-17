<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\perfil;
use App\Models\User;

class users_metadata extends Model
{
    use HasFactory;
    protected $table = "users_metadata";
    protected $guarded = [];
    public $timestamps = false;

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function perfil(){
        return $this->belongsTo(perfil::class);
    }
}
