<?php

namespace App\Models\Relations;

use App\Models\Course;
use Illuminate\Database\Eloquent\Relations\HasMany;
 
trait HasManyCourses
{
    /**
     * Get the user that owns the phone.
     */
    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}