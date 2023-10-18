<?php

namespace App\Models;

use App\Models\User;


use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class markets extends Model
{
    use HasFactory;

    protected $table = 'markets_types';



    // public function typemarket(): BelongsTo
    public function typemarket(): HasOne

    {
        // return $this->belongsTo(User::class, 'market_type');
        return $this->hasOne(User::class, 'market_type');


    }







}
