<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Localizacion>
 */
class LocalizacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        //$ciudad =['Almeria','Granada','Malaga','Sevilla','Cadiz','Huelva', 'Cordoba','Jaen'];
        return [
            'ciudad'=>$this->faker->state(),
            'nombre_edificio'=>'Edificio'.$this->faker->numberBetween(1,20),
            'direccion'=> $this->faker->streetAddress(),
            'numero_sala'=>$this->faker->numberBetween(1, 10),
           
        ];
    }
}
