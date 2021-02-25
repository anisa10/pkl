<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kecamatans')->insert([   
            ['id' => 1101010, "id_kota" => 1101, "kode_kecamatan" => 1101010, "nama_kecamatan" => "TEUPAH SELATAN"],
            ['id' => 1101020, "id_kota" => 1101, "kode_kecamatan" => 1101020, "nama_kecamatan" => "SIMEULUE TIMUR"],
            ['id' => 1101021, "id_kota" => 1101, "kode_kecamatan" => 1101021, "nama_kecamatan" => "TEUPAH BARAT"],
    
            ['id' => 1102010, "id_kota" => 1102, "kode_kecamatan" => 1102010, "nama_kecamatan" => "PULAU BANYAK"],
            ['id' => 1102011, "id_kota" => 1102, "kode_kecamatan" => 1102011, "nama_kecamatan" => "PULAU BANYAK BARAT"],
            ['id' => 1102020, "id_kota" => 1102, "kode_kecamatan" => 1102020, "nama_kecamatan" => "SINGKIL"],
            
            ['id' => 1201062, "id_kota" => 1201, "kode_kecamatan" => 1201062, "nama_kecamatan" => "ULUGAWO"],
            ['id' => 1201070, "id_kota" => 1201, "kode_kecamatan" => 1201070, "nama_kecamatan" => "GIDO"],
            ['id' => 1201071, "id_kota" => 1201, "kode_kecamatan" => 1201071, "nama_kecamatan" => "SOGAEADU"],
      
            ['id' => 1301032, "id_kota" => 1301, "kode_kecamatan" => 1301032, "nama_kecamatan" => "SIBERUT TENGAH"],
            ['id' => 1301040, "id_kota" => 1301, "kode_kecamatan" => 1301040, "nama_kecamatan" => "SIBERUT UTARA"],
            ['id' => 1301041, "id_kota" => 1301, "kode_kecamatan" => 1301041, "nama_kecamatan" => "SIBERUT BARA"],
            
            ['id' => 1401053, "id_kota" => 1401, "kode_kecamatan" => 1401053, "nama_kecamatan" => "KUANTAN HILIR SEBERANG"],
            ['id' => 1401060, "id_kota" => 1401, "kode_kecamatan" => 1401060, "nama_kecamatan" => "CERENTI"],
            ['id' => 1401061, "id_kota" => 1401, "kode_kecamatan" => 1401061, "nama_kecamatan" => "INUMAN"],
            
            ['id' => 1501082, "id_kota" => 1501, "kode_kecamatan" => 1501082, "nama_kecamatan" => "SIULAK MUKAI"],
            ['id' => 1501090, "id_kota" => 1501, "kode_kecamatan" => 1501090, "nama_kecamatan" => "KAYU ARO"],
            ['id' => 1501091, "id_kota" => 1501, "kode_kecamatan" => 1501091, "nama_kecamatan" => "GUNUNG TUJUH"],
            
            ['id' => 1601093, "id_kota" => 1601, "kode_kecamatan" => 1601093, "nama_kecamatan" => "KEDATON PENINJAUAN RAYA"],
            ['id' => 1601130, "id_kota" => 1601, "kode_kecamatan" => 1601130, "nama_kecamatan" => "BATU RAJA TIMUR"],
            ['id' => 1601131, "id_kota" => 1601, "kode_kecamatan" => 1601131, "nama_kecamatan" => "LUBUK RAJA"],
            
            ['id' => 1701041, "id_kota" => 1701, "kode_kecamatan" => 1701041, "nama_kecamatan" => "KOTA MANNA"],
            ['id' => 1701042, "id_kota" => 1701, "kode_kecamatan" => 1701042, "nama_kecamatan" => "KEDURANG"],
            ['id' => 1701043, "id_kota" => 1701, "kode_kecamatan" => 1701043, "nama_kecamatan" => "BUNGA MAS"],

            ['id' => 1801050, "id_kota" => 1801, "kode_kecamatan" => 1801050, "nama_kecamatan" => "BELALAU"],
            ['id' => 1801051, "id_kota" => 1801, "kode_kecamatan" => 1801051, "nama_kecamatan" => "SEKINCAU"],
            ['id' => 1801052, "id_kota" => 1801, "kode_kecamatan" => 1801052, "nama_kecamatan" => "SUOH"],

            ['id' => 3601120, "id_kota" => 3601, "kode_kecamatan" => 3601120, "nama_kecamatan" => "LABUAN"],
            ['id' => 3601121, "id_kota" => 3601, "kode_kecamatan" => 3601121, "nama_kecamatan" => "CARITA"],
            ['id' => 3601130, "id_kota" => 3601, "kode_kecamatan" => 3601130, "nama_kecamatan" => "JIPUT"],

            ['id' => 7301010, "id_kota" => 7301, "kode_kecamatan" => 7301010, "nama_kecamatan" => "PASIMARANNU"],
            ['id' => 7301011, "id_kota" => 7301, "kode_kecamatan" => 7301011, "nama_kecamatan" => "PASILAMBENA"],
            ['id' => 7301020, "id_kota" => 7301, "kode_kecamatan" => 7301020, "nama_kecamatan" => "PASIMASSUNGGU"],

            ['id' => 8201131, "id_kota" => 8201, "kode_kecamatan" => 8201131, "nama_kecamatan" => "IBU SELATAN"],
            ['id' => 8201132, "id_kota" => 8201, "kode_kecamatan" => 8201132, "nama_kecamatan" => "TABARU"],
            ['id' => 8201140, "id_kota" => 8201, "kode_kecamatan" => 8201140, "nama_kecamatan" => "LOLODA"],
            
           ]);
    }
}
