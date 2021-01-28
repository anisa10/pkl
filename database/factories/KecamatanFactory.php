<?php

namespace Database\Factories;
use Faker\Generator as Faker;
use App\Models\Kota;
use App\Models\Kecamatan;
use Illuminate\Database\Eloquent\Factories\Factory;

class KecamatanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kecamatan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $factory->definition(Kecamatan::class, function (Faker $faker) {
            return [
                'kode_Kecamatan' => $faker-> number,
                'id_kota'  => $faker-> sentence,
                'nama_Kecamatan'  => $faker-> sentence,
            ];
            });
    }
}
