<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;
    protected $fillable=['user_id', 'bus_id', 'from', 'to','name' ,'price', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    public function trip()
    {
        return $this->hasMany(Trip::class);
    }
    public function book(){
        return $this->hasMany(Book::class);
    }
}
