<?php

namespace App\Models\Relations;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;
 
trait HasManyUsers
{
    /**
     * Get the user that owns the phone.
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}