<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\ReviewService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class WebController extends Controller
{
    public function __construct(
        private ReviewService $review_service
    )
    { }

    public function default()
    {
        $reviews = $this->review_service->get(['per_page' => 3]);

        return $this->makeView('web.pages.default', [
            'images' => array_slice(config('data.gallery.images'), 0,5),
            'cooperation_companies' => config('data.cooperation_companies'),
            'reviews' => $this->renderReviews($reviews),
        ]);
    }

    public function contact()
    {
        return $this->makeView('web.pages.contact', [
            'breadcrumb' => [
                ['title' => 'Kontakt'],
            ]
        ]);
    }

    public function gallery()
    {
        return $this->makeView('web.pages.gallery', [
            'images' => config('data.gallery.images'),
            'breadcrumb' => [
                ['title' => 'Galéria']
            ]
        ]);
    }

    public function services() {
        return $this->makeView('web.pages.services', [
            'breadcrumb' => [
                ['title' => 'Služby']
            ]
        ]);
    }

    public function certificates() {
        return $this->makeView('web.pages.certificates', [
            'images' => config('data.certificates'),
            'breadcrumb' => [
                ['title' => 'Certifikáty']
            ]
        ]);
    }

    private function renderReviews($reviews)
    {
        return view('web.components.reviews.list', ['list' => $reviews])->render();
    }
}