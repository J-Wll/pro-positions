<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function show(Employer $employer)
    {
        return view("results", ["jobs" => $employer->jobs, "heading" => "Jobs from " . $employer->name]);
    }
}
