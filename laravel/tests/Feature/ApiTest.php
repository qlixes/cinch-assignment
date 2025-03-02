<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Pagination\Paginator;
use Tests\TestCase;

class ApiTest extends TestCase
{
    function test_api_has_pagination()
    {
        $response = $this->post("/api/products");

        $response->assertStatus(200);
        $response->assertJsonStructure([
            "code",
            "message",
            "data" => [
                [
                    "id",
                    "sku",
                    "name",
                    "description",
                    "product_attributes" => [
                        [
                            "id",
                            "color",
                            "size",
                        ]
                    ],
                    "product_prices" => [
                        [
                            "id",
                            "price",
                            "region_name",
                            "rental_period_name",
                            "product_name",
                        ]
                    ],
                ],
            ],
            "links",
            "meta"  => [
                "current_page",
                "from",
                "last_page",
                "links",
                "path",
                "per_page",
                "to",
                "total",
            ],
        ]);
    }
}
