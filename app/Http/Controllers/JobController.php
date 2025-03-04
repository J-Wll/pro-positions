<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // methods before get effect the DB query, methods after organize the results
        [$jobs, $featuredJobs] = Job::with("tags", "employer")->latest()->get()->groupBy("featured");

        return view("jobs.index", [
            "jobs" => $jobs,
            "featuredJobs" => $featuredJobs,
            "tags" => Tag::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("jobs.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            "title"     => ["required"],
            "salary"    => ["required"],
            "location"  => ["required"],
            "schedule"  => ["required", Rule::in(["Part Time", "Full Time"])], // value has to be one of those two
            "url"       => ["required", "active_url"],
            "tags"      => ["nullable"]
        ]);

        $attributes["featured"] = $request->has("featured");

        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, "tags"));

        if ($attributes["tags"] ?? false) {
            foreach (explode(",", $attributes["tags"]) as $tag) // string to arr
            {
                $tag = trim(strtolower($tag));
                if (strlen($tag) < 2) {
                    continue;
                }
                $job->tag($tag);
            }
        }

        // could also redirect to the new page for that job
        return redirect("/");
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
