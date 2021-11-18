<?php

namespace Database\Factories;

use App\Models\Escola;
use App\Models\User;
use App\Models\Livro;
use Illuminate\Database\Eloquent\Factories\Factory;

class EscolaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Escola::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->company(),
            'user_id' => User::factory(),
            'livro_id' => Livro::factory()
        ];
    }
}
