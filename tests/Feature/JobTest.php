<?php

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use PHPUnit\Framework\Constraint\IsTrue;

test('job belongs to employer', function () {
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        "employer_id" => $employer->id
    ]);

    expect($job->employer->is($employer))->toBeTrue();
});


test("job can have tags, no duplicates", function () {
    $job = Job::factory()->create();

    $job->tag("Frontend");
    $job->tag("Frontend");
    $job->tag("Backend");

    expect($job->tags)->toHaveCount(2);
});
