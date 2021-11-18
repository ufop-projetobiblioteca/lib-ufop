<?php

namespace Database\Factories;

use App\Models\Emprestimo;
use App\Models\User;
use App\Models\Livro;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmprestimoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Emprestimo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => Usuario::factory(),
            'livro_id' => Livro::factory()
        ];
    }
}
