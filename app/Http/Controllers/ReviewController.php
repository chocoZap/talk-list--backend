<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\ReviewService;
use App\Http\Controllers\TalkListController;


class ReviewController extends Controller
{
    public function store(ReviewService $instance, Request $request, Response $response)
    {
        $instance->store($request);
        return $response->status();
    }
}
