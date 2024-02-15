<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categoria>
 */
class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $categorias=['Muebles de salón','Muebles de dormitorio','Muebles de cocina','Muebles de baño','Muebles de Terraza'];
        return [
            'nombre'=>$this->faker->unique->randomElement($categorias),
        ];
    }
}
