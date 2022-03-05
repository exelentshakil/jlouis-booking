<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = [];

    /*
     * Belongs to a single user
     */
    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
