<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        $query = request("q");
        $jobs = Job::where("title", "LIKE", "%" . $query . "%")->get();

        return view("results", ["jobs" => $jobs, "heading"=>"Search results for ".$query]);
    }
}
