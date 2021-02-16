<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_nombre' => "administrador",
            'user_apellido' => 'admin',
            'user_email' => "admin@admin.com",
            'username' => 'admin',
            'user_rol' => 'superadmin',
            'user_fecha_nacimiento' => '12/12/2021',
            'user_telefono' => 11000000,
            'user_telefono_alt' => 11000000,
            'user_celular' => 11000000,
            'user_domicilio' => 'admin',
            'user_pais' => 'admin',
            'user_provincia' => 'admin',
            'user_ciudad' => 'admin',
            'user_origen' => 'admin',
            'user_estado' => true,
            'email_verified_at' => now(),
            'user_gerencia' => "Bariloche",
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}
