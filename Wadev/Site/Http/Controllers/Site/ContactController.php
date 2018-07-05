<?php

namespace Wadev\Site\Http\Controllers\Site;

use Solumax\PhpHelper\Http\Controllers\ApiBaseV1Controller as Controller;

class ContactController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function getIndex() {

        $viewData = [
            // 'posts' => \Gelora\Site\App\Post\PostModel::orderBy('id', 'desc')->take(3)->get(),
            // 'slides' => \Gelora\Site\App\Slide\SlideModel::where('homepage_display', true)->get()
        ];

        return view('wadev.site::site.contact.index')
                        ->with('viewData', $viewData);
    }

}
