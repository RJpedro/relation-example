<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository 
{
    protected $resourceType = User::class;

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
            ->groupBy('users.id');
    }

    /**
     * Filter attributes.
     *
     * @param array $attributes
     * @return array
     */
    public function filterAttributes($attributes)
    {
        if (is_null(data_get($attributes, 'password'))) {
            unset($attributes['password']);
        } else {
            $attributes['password'] = bcrypt($attributes['password']);
        }

        return $attributes;
    }
}