<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserved extends Model
{
    use HasFactory;
    protected $table = "reversed";
    public $timestamps = false;
    protected $fillable = [
        "room_id",
        "start_at",
        "end_at",
        "password",
        "user_id",
        "for",
        "note"
    ];
}
