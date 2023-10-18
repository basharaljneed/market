<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;


class type extends Model
{
    use HasFactory;

    public function showuser():HasMany
    {
       return $this->hasMany(User::class, 'type_id');
    }
 
    protected $table = "types";
}
