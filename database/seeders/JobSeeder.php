<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(8)->create();
        $jobs = Job::factory(11)->create(new Sequence(
            [
                "featured" => false
            ],
            [
                "featured" => false
            ],
            [
                "featured" => true
            ]
        ));

        foreach ($jobs as $job) {
            for ($x = 0; $x <= rand(1, 6); $x++) {
                $job->tag(fake()->randomElement($tags)->name);
            }
        }
    }
}
