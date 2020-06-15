<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    /** @test */
    public function it_has_a_path()
    {
        $project = factory('App\Project')->make(['owner_id' => null]);

        $this->assertEquals('/projects/' . $project->id, $project->path());
    }

    public function it_belongs_to_a_user()
    {
        $project = factory('App\User')->create();

        $this->assertInstanceOf(\App\User::class, $project->owner);
    }
}
