<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function major()
    {
        return $this->belongsTo(Major::class);
    }

    public function field()
    {
        return $this->belongsTo(Field::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
