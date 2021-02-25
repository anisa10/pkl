<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Kelurahans')->insert([   
            ['id' => 1101010001, "id_kecamatan" => 1101010, "nama_kelurahan" => "LATIUNG"],
            ['id' => 1101010002, "id_kecamatan" => 1101010, "nama_kelurahan" => "LABUHAN BAJAU"],
                    
            ['id' => 1101020022, "id_kecamatan" => 1101020, "nama_kecamatan" => "AIR PINANG"],
            ['id' => 1101020023, "id_kecamatan" => 1101020, "nama_kecamatan" => "KUALA MAKMUR"],            
    
        ]);
    }
}
