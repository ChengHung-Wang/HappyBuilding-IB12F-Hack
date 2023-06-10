<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        "name", "serial", "display", "disabled"
    ];
    protected $casts = [
      "id" => 'integer',
      'serial' => 'string',
      'name'=> 'string',
      'display' => 'boolean',
      'disabled' => 'disabled'
    ];

    public function is_reserve(string $room_id, Carbon $start_at, Carbon $end_at): bool
    {
        return Reserved::where("room_id", $room_id)
            ->where(function($query) use ($start_at, $end_at){
                $query->whereBetween('start_at', [$start_at, $end_at])
                    ->orWhereBetween('end_at', [$start_at, $end_at]);
            })
            ->count() > 0;
    }
}
