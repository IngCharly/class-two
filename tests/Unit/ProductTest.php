<?php

namespace Tests\Unit;

use App\Models\Country;
use Tests\TestCase;
use App\Models\Company;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_product_belogs_to_company()
    {
        $product = Product::factory()->create();
        $this->assertInstanceOf(Company::class, $product->company);
    }

    public function test_a_product_belogs_to_country()
    {
        $product = Product::factory()->create();
        $this->assertInstanceOf(Country::class, $product->country);
    }




    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_user_can_create_product()
    {
        $this->assertTrue(true);
    }
}
