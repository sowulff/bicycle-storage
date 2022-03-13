<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class buyBicycleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_view_cart()
    {
        $response = $this->get('bicycles/buy/{id}', ['id' => 1]);
        $response->assertStatus(200);
    }

    // Route::post('orderBike/{bicycle:id}', [
    //     'as' => 'orderBike',
    //     'uses' => OrderBicycleController::class
    // ]);
}
