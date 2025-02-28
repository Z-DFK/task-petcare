<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Settings;
use App\Models\Social;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $social = Social::latest()->first();
        $link = [
            'vk' => $social->vk,
            'tg' => $social->tg,
            'x' => $social->x,
            'youtube' => $social->youtube,
        ];

        $setting = Setting::latest()->first();
        $data = [
            'title' => 'Главная',
            'description' => $setting->description,
            'site_name' => $setting->name,
            'meta_title' => $setting->meta_title,
            'meta_description' => $setting->meta_description,
            'meta_keywords' => $setting-> meta_keywords,
            'meta_og_title' => $setting->meta_title,
            'meta_og_description' => $setting->meta_description,
        ];

        return view('web.pages.home.index', $data, $link);
    }

    public function post()
    {
        $posts = Post::where('is_verificate', true)->get();
        return view('web.pages.home.index', [
            'title' => 'Статьи',
            'posts' => $posts
        ]);
    }
}
