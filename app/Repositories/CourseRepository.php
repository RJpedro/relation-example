<?php

namespace App\Repositories;

use App\Models\Course;

class CourseRepository 
{
    protected $resourceType = Course::class;

    /**
     * Apply filters.
     *
     * @param Builder $query
     * @param array $params
     * @return Builder
     */
    public function applyFilter($query, $params)
    {
        return $query->select('users.*')
            ->groupBy('courses.id');
    }
}