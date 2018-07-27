<?php

namespace Tests\Feature;

use App\Doctors;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
// use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Artisan;

class MapTest extends TestCase
{
    use RefreshDatabase;

    public function createApplication()
    {
        $app = require __DIR__.'/../../bootstrap/app.php';

        //Load .env.testing environment
        $app->loadEnvironmentFrom('.env.test');

        $app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

        return $app;
    }

    public function setUp()
    {
        parent::setUp();
        Artisan::call('migrate:fresh');
    }

    public function tearDown()
    {
        Artisan::call('migrate:reset');
        parent::tearDown();
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     $this->assertTrue(true);
    // }

    public function testHomeIsOk()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    // public function testDoctors()
    // {
    //     $this->assertDatabaseHas('doctors', ['doctor_name' => 'Dr.Dameon']);
    //     $this->assertDatabaseMissing('doctors', ['doctor_name' => 'Dr. John']);
    // }

    public function testFactory()
    {
        factory(Doctors::class, 2)->create();

        // $doctors = factory(Doctors::class)->make();
        $doctors = Doctors::all();

        $this->assertGreaterThan(0, $doctors->count());
    }
}
