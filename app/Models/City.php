<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\State;

class City extends Model
{
    //
    protected $fillable = ['name', 'state_id'];
    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
