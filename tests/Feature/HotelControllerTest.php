<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class HotelControllerTest extends TestCase
{
    public function test_get_hotels_with_token(): void
    {
        $response = $this->withHeaders(['token'=>'8PSqWPv3O7'])->json('GET','api/hotels',[]);

        $response->assertStatus(200);
    }
}
