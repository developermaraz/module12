<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable=['user_id', 'route_id','startingDate' ,'startingTime', 'seatReserve','status'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }
    public function route()
    {
        return $this->belongsTo(Route::class);
    }
    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
}
