<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\datapemilih>
 */
class DataPemilihFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nama'=>$this->faker->name(),
            'NIK'=>$this->faker->nik(),
            'NomorHP'=>$this->faker->phoneNumber(),
            'Kampung'=>$this->faker->locale(),
            'Rt'=>$this->faker->locale(),
            'Rw'=>$this->faker->locale(),
            'Desa'=>$this->faker->name(),
            'Kecamatan'=>$this->faker->emoji(),
            'TPS'=>$this->faker->randomNumber(),
            'Nama_Relawan'=>$this->faker->name(),
            'Koordinator'=>$this->faker->name(),
        ];
    }
}
