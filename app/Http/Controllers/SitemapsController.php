<?php

namespace CachetHQ\Http\Controllers;

use Watson\Sitemap\Facades\Sitemap;

class SitemapsController extends Controller
{
    public function index()
    {
        Sitemap::addSitemap(route('site.home'));
        Sitemap::addSitemap(route('site.team'));
        Sitemap::addSitemap(route('site.faq'));

        return Sitemap::renderSitemapIndex();
    }
}
