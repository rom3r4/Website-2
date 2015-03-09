<?php

namespace CachetHQ\Http\Controllers;

use Watson\Sitemap\Facades\Sitemap;

class SitemapsController extends Controller
{
    public function index()
    {
        Sitemap::addSitemap(route('home'));

        return Sitemap::renderSitemapIndex();
    }
}
