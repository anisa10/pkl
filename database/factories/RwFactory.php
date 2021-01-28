<?php

namespace Database\Factories;

use App\Models\Rw;
use Illuminate\Database\Eloquent\Factories\Factory;

class RwFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rw::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $factory->definition(Kota::class, function (Faker $faker) {
            return [
                'id_kelurahan'  => $faker-> sentence,
                'nama_rw'  => $faker-> sentence,
            ];
            });
    }
}
