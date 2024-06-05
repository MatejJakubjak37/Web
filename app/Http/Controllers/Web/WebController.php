<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class WebController extends Controller
{
    public function default()
    {
        return $this->makeView('web.pages.default', [
            'images' => array_slice(config('data.gallery.images'), 0,5),
            'cooperation_companies' => config('data.cooperation_companies'),
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
}