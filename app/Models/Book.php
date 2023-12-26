<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable=['user_id', 'trip_id', 'totalMember', 'perCost', 'TotalCost'];
    function user(){
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
