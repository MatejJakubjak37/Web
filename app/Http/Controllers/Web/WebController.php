<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\ReviewService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use App\Models\BlogPosts;

class WebController extends Controller
{
    public function __construct(
        private ReviewService $review_service
    )
    { }

    public function default()
    {
        $reviews = $this->review_service->get(['per_page' => 3]);
        $blog_posts = BlogPosts::orderBy('created_at', 'desc')->take(3)->get();

        return $this->makeView('web.pages.default', [
            'images' => array_slice(config('data.gallery.images'), 0,5),
            'cooperation_companies' => config('data.cooperation_companies'),
            'reviews' => $this->renderReviews($reviews),
            'blog_posts' => $blog_posts,
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
                ['title' => 'Realizácie']
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

    public function about() {
        return $this->makeView('web.pages.about', [
            'breadcrumb' => [
                ['title' => 'O nás']
            ]
        ]);
    }

    public function blog() {
        $blog_posts = BlogPosts::orderBy('created_at', 'desc')->get();
        return $this->makeView('web.pages.blog', [
            'breadcrumb' => [
                ['title' => 'Blog']
            ],
            'blog_posts' => $blog_posts
        ]);
    }

    public function showBlog($slug)
    {
        $blog_post = BlogPosts::where('slug', $slug)->firstOrFail();
        return $this->makeView('web.pages.blog_post', [
            'breadcrumb' => [
                ['title' => $blog_post->title]
            ],
            'blog_post' => $blog_post
        ]);
    }

    private function renderReviews($reviews)
    {
        return view('web.components.reviews.list', ['list' => $reviews])->render();
    }
}