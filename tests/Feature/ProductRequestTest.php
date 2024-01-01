<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;

class ProductRequestTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_passes_validation()
{
    $data = [
        'name' => 'Example Product',
        'description' => 'This is a test product.',
        'price' => 19.99,
        'stock' => 50,
    ];

    $this->post(route('products.store'), $data)->assertSessionDoesntHaveErrors();
}


    /** @test */
    public function it_fails_validation_when_required_fields_are_missing()
    {
        $data = [
            'name' => null,
            'description' => null,
            'price' => null,
            'stock' => null,
        ];
    
        $this->post(route('products.store'), $data)->assertSessionHasErrors();
    }
    
}
