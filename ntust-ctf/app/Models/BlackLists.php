<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlackLists extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "black_list";
    protected $fillable = [
        "user_id",
        "reason",
        "created_at",
        "updated_at",
        "by_user_id"
    ];
}
