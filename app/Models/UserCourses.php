<?php

namespace App\Models;

use App\Models\Relations\BelongsToCourse;
use App\Models\Relations\BelongsToUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCourses extends Model
{
    use HasFactory;
    use BelongsToCourse;
    use BelongsToUser;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'course_id',
        'user_id',
    ];
}
