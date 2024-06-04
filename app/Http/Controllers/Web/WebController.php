<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class WebController extends Controller
{
    public function default()
    {
        return $this->makeView('web.pages.default', [
            'cooperation_companies' => config('data.cooperation_companies'),
        ]);
    }

    public function gallery()
    {
        return $this->makeView('web.pages.gallery', [
            'images' => config('data.gallery.images')
        ]);
    }
}