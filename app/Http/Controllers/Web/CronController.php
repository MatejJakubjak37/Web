<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Jobs\FetchGoogleReviewsJob;
use App\Services\ReviewService;

class CronController extends Controller
{
    public function __construct(
        private ReviewService $reviewService
    )
    { }

    public function run($slug)
    {
        switch ($slug) {
            case 'fetch-google-reviews':
                return $this->reviewService->fetch();
            default:
                abort(404);
        }
    }
}
