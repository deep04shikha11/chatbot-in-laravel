<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase {
    use RefreshDatabase, WithFaker;
    /**
     * A basic feature test example.
     */
    public function test_product_can_be_created_in_database(): void {
        $product = \App\Models\Product::factory()->create();

        $this->assertDatabaseHas('products', [
            'id' => $product->id,
            'name' => $product->name,
            'description' => $product->description,
            'price' => $product->price,
            'stock' => $product->stock,
            'is_active' => $product->is_active,
        ]);
        // $response = $this->get('/');

        // $response->assertStatus(200);
    }

    public function test_product_can_be_deleted_from_database(): void {
        $product = \App\Models\Product::factory()->create();

        $product->delete();

        $this->assertDatabaseMissing('products', [
            'id' => $product->id,
        ]);
    }
}