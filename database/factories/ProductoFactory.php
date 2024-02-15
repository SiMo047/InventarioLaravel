<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

            $estado=['activo','roto','desaparecido'];

        return [
            'modelo'=>'Model' .$this->faker->text($maxNbChars = 6),
            'fabricante'=>$this->faker->company(),
            'descripcion'=> $this->faker->text($maxNbChars = 200),
            'stock'=>$this->faker->numberBetween($min = 0, $max = 100),
            'estado'=>$estado[rand(0,2)],
            'localizacion_id'=>$this->faker->numberBetween(1,10)
        ];
    }
}
