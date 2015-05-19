<?php

namespace CachetHQ\Http\Controllers;

use Awjudd\FeedReader\Facades\FeedReader;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the website homepage to the user.
     *
     * @return Response
     */
    public function index()
    {
        $blogFeed = FeedReader::read('https://blog.cachethq.io/feed');
        $feedItems = $blogFeed->get_item_quantity(10);
        $recentArticles = 0;
        $newSpan = Carbon::now()->subWeek();

        for ($i=0; $i < $feedItems; $i++) {
            $feedItem = $blogFeed->get_item($i);
            $itemDate = Carbon::createFromFormat('Y-m-d', $feedItem->get_date('Y-m-d'));
            if ($itemDate->gte($newSpan)) {
                $recentArticles++;
            }
        }

        return view('home')->with(compact('recentArticles'));
    }

    /**
     * Show the team page to the user.
     *
     * @return Response
     */
    public function team()
    {
        return view('team');
    }

    /**
     * Show the faq page to the user.
     *
     * @return Response
     */
    public function faq()
    {
        return view('faq');
    }
}
