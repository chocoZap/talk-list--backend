<?php

namespace App\Services;

use App\Models\Review;

class ReviewService {
    public static function store($request)
    {
        return Review::create($request->all());
    }
}
