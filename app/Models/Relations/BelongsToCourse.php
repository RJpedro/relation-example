<?php

namespace App\Models\Relations;

use App\Models\Course;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
 
trait BelongsToCourse
{
   
    /**
     * Get the user that owns the phone.
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}