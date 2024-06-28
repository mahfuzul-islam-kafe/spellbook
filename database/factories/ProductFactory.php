<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'store' => $this->faker->company,
            'warehouse' => $this->faker->word,
            'product_name' => $this->faker->word,
            'slug' => $this->faker->slug,
            'sku' => $this->faker->unique()->numerify('SKU-####'),
            'category' => $this->faker->word,
            'brand' => $this->faker->company,
            'unit' => $this->faker->randomElement(['kg', 'pc']),
            'selling_type' => $this->faker->randomElement(['transactional', 'solution']),
            'barcode_symbology' => $this->faker->word,
            'item_code' => $this->faker->unique()->numerify('ITEM-####'),
            'description' => $this->faker->sentence,
            'quantity' => $this->faker->randomNumber(2),
            'price' => $this->faker->randomFloat(2, 1, 100),
            'tax_type' => $this->faker->word,
            'discount_type' => $this->faker->word,
            'discountvalue' => $this->faker->randomFloat(2, 0, 50),
            'quantityalert' => $this->faker->randomNumber(1),
            'image' => $this->faker->imageUrl(),
            'vendor' => $this->faker->company,
            'manufactureddate' => $this->faker->date(),
            'expiryon' => $this->faker->date(),
        ];
    }
}
