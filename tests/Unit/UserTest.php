<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Collection;
use Tests\TestCase;

class UserTest extends TestCase
{
   /** @test */
   public function has_project()
   {
       $user = factory('App\User')->make();

       $this->assertInstanceOf(Collection::class, $user->projects);
   }
   
}
