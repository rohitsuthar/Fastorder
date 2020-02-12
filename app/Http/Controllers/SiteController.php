<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller {

    //Task 1
    public static function Task1() {
        $url = "https://hn.algolia.com/api/v1/search_by_date?tags=story&hitsPerPage=10";
        $response = \Httpful\Request::get($url)
                ->expectsJson()
                ->withXTrivialHeader('Task 1')
                ->send();

        return view('site.task1')->with('json', $response);
    }

    //Task 2
    public static function Task2() {
        $current_date = date('Y-m-d');
        $url = "http://api.tvmaze.com/schedule?country=US&date=$current_date";

        $response = \Httpful\Request::get($url)
                ->expectsJson()
                ->withXTrivialHeader('Task 2')
                ->send();

        return view('site.task2')->with('json', $response);
    }

    //Show Full Details
    public static function Program(Request $request) {
        $__show_id = $request->route('show_id');
        $url = "http://api.tvmaze.com/shows/$__show_id";

        $response = \Httpful\Request::get($url)
                ->expectsJson()
                ->withXTrivialHeader('Show Information')
                ->send();

        return view('site.program_info')->with('json', $response);
    }

}
