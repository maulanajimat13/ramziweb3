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
            'Rt'=>$this->faker->randomNumber(2),
            'Rw'=>$this->faker->numberBetween($min = 1, $max = 10),
            'Desa'=>$this->faker->city(),
            'Kecamatan'=>$this->faker->randomElement($array = array ('KADUDAMPIT',
            'GUNUNGGURUH',
            'GEGERBITUNG',
            'KEBONPEDES',
            'SUKALARANG',
            'SUKABUMI',
            'CISAAT',
            'CIRENGHAS',
            'SUKARAJA')),
            'TPS'=>$this->faker->randomNumber(2),
            'Nama_Relawan'=>$this->faker->name(),
            'Koordinator'=>$this->faker->randomElement($array = array (
            'GUNAWAN',
            'M. ILYAS',
            'IWAN',
            'SAHRUL',
            'ERVAN',
            'ASEP RAHMAT',
            'TEMI')),
        ];
    }
}
