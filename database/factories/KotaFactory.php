<?php

namespace Database\Factories;
use Faker\Generator as Faker;
use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Database\Eloquent\Factories\Factory;

class KotaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kota::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $factory->definition(Kota::class, function (Faker $faker) {
            return [
                'id' => $faker-> number(0, 100000),
                'kode_kota' => $faker-> number(0, 100000),
                'id_provinsi'  => $faker-> sentence,
                'nama_kota'  => $faker-> sentence,
            ];
            });
    }
}
