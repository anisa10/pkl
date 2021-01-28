<?php

namespace Database\Factories;
use Faker\Generator as Faker;
use App\Models\Provinsi;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProvinsiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Provinsi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $factory->definition(Provinsi::class, function (Faker $faker) {
        return [
            'id' => $faker-> number(0, 100000),
            'kode_provinsi' => $faker-> number(0, 100000),
            'nama_provinsi'  => $faker-> sentence,
        ];
        });
    }
}
