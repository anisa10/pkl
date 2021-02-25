<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kotas')->insert([
            ['id' =>  1101, "id_provinsi" => 11, "kode_kota" => 1101, "nama_kota" => "KABUPATEN SIMEULUE"],
            ['id' =>  1102, "id_provinsi" => 11, "kode_kota" => 1102, "nama_kota" => "KABUPATEN ACEH INGKIL"],
            ['id' =>  1103, "id_provinsi" => 11, "kode_kota" => 1103, "nama_kota" => "KABUPATEN ACEH ELATAN"],
            ['id' =>  1104, "id_provinsi" => 11, "kode_kota" => 1104, "nama_kota" => "KABUPATEN ACEH ENGGARA"],
            ['id' =>  1105, "id_provinsi" => 11, "kode_kota" => 1105, "nama_kota" => "KABUPATEN ACEH IMUR"],
 
            ['id' =>  1201, "id_provinsi" => 12, "kode_kota" => 1201,  "nama_kota" => "KABUPATEN NIAS"],
            ['id' =>  1202, "id_provinsi" => 12, "kode_kota" => 1202,  "nama_kota" => "KABUPATEN MANDAILING NATAL"],
            ['id' =>  1203, "id_provinsi" => 12, "kode_kota" => 1203,  "nama_kota" => "KABUPATEN TAPANULI SELATAN"],
            ['id' =>  1204, "id_provinsi" => 12, "kode_kota" => 1204,  "nama_kota" => "KABUPATEN TAPANULI TENGAH"],
            ['id' =>  1205, "id_provinsi" => 12, "kode_kota" => 1205,  "nama_kota" => "KABUPATEN TAPANULI UTARA"],
         
            ['id' =>  1301, "id_provinsi" => 13, "kode_kota" => 1301, "nama_kota" => "KABUPATEN KEPULAUAN MENTAWAI"],
            ['id' =>  1302, "id_provinsi" => 13, "kode_kota" => 1302, "nama_kota" => "KABUPATEN PESISIR SELATAN"],
            ['id' =>  1303, "id_provinsi" => 13, "kode_kota" => 1303, "nama_kota" => "KABUPATEN SOLOK"],
            ['id' =>  1373, "id_provinsi" => 13, "kode_kota" => 1373, "nama_kota" => "KOTA SAWAH LUNTO"],
            ['id' =>  1374, "id_provinsi" => 13, "kode_kota" => 1374, "nama_kota" => "KOTA PADANG PANJANG"],
            ['id' =>  1375, "id_provinsi" => 13, "kode_kota" => 1375, "nama_kota" => "KOTA BUKITTINGGI"],
            ['id' =>  1376, "id_provinsi" => 13, "kode_kota" => 1376, "nama_kota" => "KOTA PAYAKUMBUH"],
            ['id' =>  1377, "id_provinsi" => 13, "kode_kota" => 1377, "nama_kota" => "KOTA PARIAMAN"],
 
            ['id' =>  1401, "id_provinsi" => 14, "kode_kota" => 1401, "nama_kota" => "KABUPATEN KUANTAN SINGINGI"],
            ['id' =>  1402, "id_provinsi" => 14, "kode_kota" => 1402, "nama_kota" => "KABUPATEN INDRAGIRI HULU"],
            ['id' =>  1403, "id_provinsi" => 14, "kode_kota" => 1403, "nama_kota" => "KABUPATEN INDRAGIRI HILIR"],
            ['id' =>  1404, "id_provinsi" => 14, "kode_kota" => 1404, "nama_kota" => "KABUPATEN PELALAWAN"],
            ['id' =>  1405, "id_provinsi" => 14, "kode_kota" => 1405, "nama_kota" => "KABUPATEN SIAK"],          
    
            ['id' =>  1501, "id_provinsi" => 15, "kode_kota" => 1501, "nama_kota" => "KABUPATEN KERINCI"],
            ['id' =>  1502, "id_provinsi" => 15, "kode_kota" => 1502, "nama_kota" => "KABUPATEN MERANGIN"],
            ['id' =>  1503, "id_provinsi" => 15, "kode_kota" => 1503, "nama_kota" => "KABUPATEN SAROLANGUN"],
            ['id' =>  1504, "id_provinsi" => 15, "kode_kota" => 1504, "nama_kota" => "KABUPATEN BATANG HARI"],
            ['id' =>  1572, "id_provinsi" => 15, "kode_kota" => 1572, "nama_kota" => "KOTA SUNGAI PENUH"],
 
            ['id' =>  1601, "id_provinsi" => 16, "kode_kota" => 1601, "nama_kota" => "KABUPATEN OGAN KOMERING ULU"],
            ['id' =>  1602, "id_provinsi" => 16, "kode_kota" => 1602, "nama_kota" => "KABUPATEN OGAN KOMERING ILIR"],
            ['id' =>  1603, "id_provinsi" => 16, "kode_kota" => 1603, "nama_kota" => "KABUPATEN MUARA ENIM"],
            ['id' =>  1604, "id_provinsi" => 16, "kode_kota" => 1604, "nama_kota" => "KABUPATEN LAHAT"],
 
            ['id' =>  1701, "id_provinsi" => 17, "kode_kota" => 1701, "nama_kota" => "KABUPATEN BENGKULU SELATAN"],
            ['id' =>  1702, "id_provinsi" => 17, "kode_kota" => 1702, "nama_kota" => "KABUPATEN REJANG LEBONG"],
            ['id' =>  1703, "id_provinsi" => 17, "kode_kota" => 1703, "nama_kota" => "KABUPATEN BENGKULU UTARA"],
            ['id' =>  1704, "id_provinsi" => 17, "kode_kota" => 1704, "nama_kota" => "KABUPATEN KAUR"],
            ['id' =>  1705, "id_provinsi" => 17, "kode_kota" => 1705, "nama_kota" => "KABUPATEN SELUMA"],
 
            ['id' =>  1801, "id_provinsi" => 18, "kode_kota" => 1801, "nama_kota" => "KABUPATEN LAMPUNG BARAT"],
            ['id' =>  1802, "id_provinsi" => 18, "kode_kota" => 1802, "nama_kota" => "KABUPATEN TANGGAMUS"],
            ['id' =>  1803, "id_provinsi" => 18, "kode_kota" => 1803, "nama_kota" => "KABUPATEN LAMPUNG SELATAN"],
            ['id' =>  1804, "id_provinsi" => 18, "kode_kota" => 1804, "nama_kota" => "KABUPATEN LAMPUNG TIMUR"],
            ['id' =>  1805, "id_provinsi" => 18, "kode_kota" => 1805, "nama_kota" => "KABUPATEN LAMPUNG TENGAH"],  
 
            ['id' =>  1901, "id_provinsi" => 19, "kode_kota" => 1901, "nama_kota" => "KABUPATEN BANGKA"],
            ['id' =>  1902, "id_provinsi" => 19, "kode_kota" => 1902, "nama_kota" => "KABUPATEN BELITUNG"],
            ['id' =>  1903, "id_provinsi" => 19, "kode_kota" => 1903, "nama_kota" => "KABUPATEN BANGKA BARAT"],
            ['id' =>  1904, "id_provinsi" => 19, "kode_kota" => 1904, "nama_kota" => "KABUPATEN BANGKA TENGAH"],
            ['id' =>  1905, "id_provinsi" => 19, "kode_kota" => 1905, "nama_kota" => "KABUPATEN BANGKA SELATAN"],
 
            ['id' =>  2101, "id_provinsi" => 21, "kode_kota" => 2101, "nama_kota" => "KABUPATEN KARIMUN"],
            ['id' =>  2102, "id_provinsi" => 21, "kode_kota" => 2102, "nama_kota" => "KABUPATEN BINTAN"],
            ['id' =>  2103, "id_provinsi" => 21, "kode_kota" => 2103, "nama_kota" => "KABUPATEN NATUNA"],
            ['id' =>  2104, "id_provinsi" => 21, "kode_kota" => 2104, "nama_kota" => "KABUPATEN LINGGA"],
            ['id' =>  2105, "id_provinsi" => 21, "kode_kota" => 2105, "nama_kota" => "KABUPATEN KEPULAUAN ANAMBAS"],
 
            ['id' =>  3101, "id_provinsi" => 31, "kode_kota" => 3101, "nama_kota" => "KABUPATEN KEPULAUAN SERIBU"],
            ['id' =>  3171, "id_provinsi" => 31, "kode_kota" => 3171, "nama_kota" => "KOTA JAKARTA SELATAN"],
            ['id' =>  3172, "id_provinsi" => 31, "kode_kota" => 3172, "nama_kota" => "KOTA JAKARTA TIMUR"],
            ['id' =>  3173, "id_provinsi" => 31, "kode_kota" => 3173, "nama_kota" => "KOTA JAKARTA PUSAT"],
            ['id' =>  3174, "id_provinsi" => 31, "kode_kota" => 3174, "nama_kota" => "KOTA JAKARTA BARAT"],
         
            ['id' =>  3201, "id_provinsi" => 32, "kode_kota" => 3201, "nama_kota" => "KABUPATEN BOGOR"],
            ['id' =>  3202, "id_provinsi" => 32, "kode_kota" => 3202, "nama_kota" => "KABUPATEN SUKABUMI"],
            ['id' =>  3203, "id_provinsi" => 32, "kode_kota" => 3203, "nama_kota" => "KABUPATEN CIANJUR"],
            ['id' =>  3214, "id_provinsi" => 32, "kode_kota" => 3214, "nama_kota" => "KABUPATEN PURWAKARTA"],
            ['id' =>  3215, "id_provinsi" => 32, "kode_kota" => 3215, "nama_kota" => "KABUPATEN KARAWANG"],
 
            ['id' =>  3301, "id_provinsi" => 33, "kode_kota" => 3301, "nama_kota" => "KABUPATEN CILACAP"],
            ['id' =>  3302, "id_provinsi" => 33, "kode_kota" => 3302, "nama_kota" => "KABUPATEN BANYUMAS"],
            ['id' =>  3311, "id_provinsi" => 33, "kode_kota" => 3311, "nama_kota" => "KABUPATEN SUKOHARJO"],
            ['id' =>  3312, "id_provinsi" => 33, "kode_kota" => 3312, "nama_kota" => "KABUPATEN WONOGIRI"],
            ['id' =>  3313, "id_provinsi" => 33, "kode_kota" => 3313, "nama_kota" => "KABUPATEN KARANGANYAR"],
 
            ['id' =>  3401, "id_provinsi" => 34, "kode_kota" => 3401, "nama_kota" => "KABUPATEN KULON PROGO"],
            ['id' =>  3402, "id_provinsi" => 34, "kode_kota" => 3402, "nama_kota" => "KABUPATEN BANTUL"],
            ['id' =>  3403, "id_provinsi" => 34, "kode_kota" => 3403, "nama_kota" => "KABUPATEN GUNUNG KIDUL"],
            ['id' =>  3404, "id_provinsi" => 34, "kode_kota" => 3404, "nama_kota" => "KABUPATEN SLEMAN"],
            ['id' =>  3471, "id_provinsi" => 34, "kode_kota" => 3471, "nama_kota" => "KOTA YOGYAKARTA"],
 
            ['id' =>  3501, "id_provinsi" => 35, "kode_kota" => 3501, "nama_kota" => "KABUPATEN PACITAN"],
            ['id' =>  3502, "id_provinsi" => 35, "kode_kota" => 3502, "nama_kota" => "KABUPATEN PONOROGO"],
            ['id' =>  3503, "id_provinsi" => 35, "kode_kota" => 3503, "nama_kota" => "KABUPATEN TRENGGALEK"],
            ['id' =>  3515, "id_provinsi" => 35, "kode_kota" => 3515, "nama_kota" => "KABUPATEN SIDOARJO"],
            ['id' =>  3516, "id_provinsi" => 35, "kode_kota" => 3516, "nama_kota" => "KABUPATEN MOJOKERTO"],
         
            ['id' =>  3601, "id_provinsi" => 36, "kode_kota" => 3601, "nama_kota" => "KABUPATEN PANDEGLANG"],
            ['id' =>  3602, "id_provinsi" => 36, "kode_kota" => 3602, "nama_kota" => "KABUPATEN LEBAK"],
            ['id' =>  3603, "id_provinsi" => 36, "kode_kota" => 3603, "nama_kota" => "KABUPATEN TANGERANG"],
            ['id' =>  3604, "id_provinsi" => 36, "kode_kota" => 3604, "nama_kota" => "KABUPATEN SERANG"],
            ['id' =>  3671, "id_provinsi" => 36, "kode_kota" => 3671, "nama_kota" => "KOTA TANGERANG"],
            
            ['id' =>  5101, "id_provinsi" => 51, "kode_kota" => 5101, "nama_kota" => "KABUPATEN JEMBRANA"],
            ['id' =>  5102, "id_provinsi" => 51, "kode_kota" => 5102, "nama_kota" => "KABUPATEN TABANAN"],
            ['id' =>  5103, "id_provinsi" => 51, "kode_kota" => 5103, "nama_kota" => "KABUPATEN BADUNG"],
            ['id' =>  5104, "id_provinsi" => 51, "kode_kota" => 5104, "nama_kota" => "KABUPATEN GIANYAR"],
            ['id' =>  5105, "id_provinsi" => 51, "kode_kota" => 5105, "nama_kota" => "KABUPATEN KLUNGKUNG"],
     
            ['id' =>  5201, "id_provinsi" => 52, "kode_kota" => 5201, "nama_kota" => "KABUPATEN LOMBOK BARAT"],
            ['id' =>  5202, "id_provinsi" => 52, "kode_kota" => 5202, "nama_kota" => "KABUPATEN LOMBOK TENGAH"],
            ['id' =>  5203, "id_provinsi" => 52, "kode_kota" => 5203, "nama_kota" => "KABUPATEN LOMBOK TIMUR"],
            ['id' =>  5204, "id_provinsi" => 52, "kode_kota" => 5204, "nama_kota" => "KABUPATEN SUMBAWA"],
            ['id' =>  5205, "id_provinsi" => 52, "kode_kota" => 5205, "nama_kota" => "KABUPATEN DOMPU"],
 
            ['id' =>  5301, "id_provinsi" => 53, "kode_kota" => 5301, "nama_kota" => "KABUPATEN SUMBA BARAT"],
            ['id' =>  5302, "id_provinsi" => 53, "kode_kota" => 5302, "nama_kota" => "KABUPATEN SUMBA TIMUR"],
            ['id' =>  5303, "id_provinsi" => 53, "kode_kota" => 5303, "nama_kota" => "KABUPATEN KUPANG"],
            ['id' =>  5304, "id_provinsi" => 53, "kode_kota" => 5304, "nama_kota" => "KABUPATEN TIMOR TENGAH SELATAN"],
            ['id' =>  5305, "id_provinsi" => 53, "kode_kota" => 5305, "nama_kota" => "KABUPATEN TIMOR TENGAH UTARA"],
         
            ['id' =>  6101, "id_provinsi" => 61, "kode_kota" => 6101, "nama_kota" => "KABUPATEN SAMBAS"],
            ['id' =>  6102, "id_provinsi" => 61, "kode_kota" => 6102, "nama_kota" => "KABUPATEN BENGKAYANG"],
            ['id' =>  6103, "id_provinsi" => 61, "kode_kota" => 6103, "nama_kota" => "KABUPATEN LANDAK"],
            ['id' =>  6104, "id_provinsi" => 61, "kode_kota" => 6104, "nama_kota" => "KABUPATEN MEMPAWAH"],
            ['id' =>  6172, "id_provinsi" => 61, "kode_kota" => 6172, "nama_kota" => "KOTA SINGKAWANG"],
 
            ['id' =>  6201, "id_provinsi" => 62, "kode_kota" => 6201, "nama_kota" => "KABUPATEN KOTAWARINGIN BARAT"],
            ['id' =>  6202, "id_provinsi" => 62, "kode_kota" => 6202, "nama_kota" => "KABUPATEN KOTAWARINGIN TIMUR"],
            ['id' =>  6203, "id_provinsi" => 62, "kode_kota" => 6203, "nama_kota" => "KABUPATEN KAPUAS"],
            ['id' =>  6204, "id_provinsi" => 62, "kode_kota" => 6204, "nama_kota" => "KABUPATEN BARITO SELATAN"],
            ['id' =>  6210, "id_provinsi" => 62, "kode_kota" => 6210, "nama_kota" => "KABUPATEN PULANG PISAU"],
 
            ['id' =>  6301, "id_provinsi" => 63, "kode_kota" => 6301, "nama_kota" => "KABUPATEN TANAH LAUT"],
            ['id' =>  6302, "id_provinsi" => 63, "kode_kota" => 6302, "nama_kota" => "KABUPATEN KOTA BARU"],
            ['id' =>  6303, "id_provinsi" => 63, "kode_kota" => 6303, "nama_kota" => "KABUPATEN BANJAR"],
            ['id' =>  6304, "id_provinsi" => 63, "kode_kota" => 6304, "nama_kota" => "KABUPATEN BARITO KUALA"],
            ['id' =>  6305, "id_provinsi" => 63, "kode_kota" => 6305, "nama_kota" => "KABUPATEN TAPIN"],
 
            ['id' =>  6401, "id_provinsi" => 64, "kode_kota" => 6401, "nama_kota" => "KABUPATEN PASER"],
            ['id' =>  6402, "id_provinsi" => 64, "kode_kota" => 6402, "nama_kota" => "KABUPATEN KUTAI BARAT"],
            ['id' =>  6403, "id_provinsi" => 64, "kode_kota" => 6403, "nama_kota" => "KABUPATEN KUTAI KARTANEGARA"],
            ['id' =>  6404, "id_provinsi" => 64, "kode_kota" => 6404, "nama_kota" => "KABUPATEN KUTAI TIMUR"],
            ['id' =>  6405, "id_provinsi" => 64, "kode_kota" => 6405, "nama_kota" => "KABUPATEN BERAU"],
      
            ['id' =>  6501, "id_provinsi" => 65, "kode_kota" => 6501, "nama_kota" => "KABUPATEN MALINAU"],
            ['id' =>  6502, "id_provinsi" => 65, "kode_kota" => 6502, "nama_kota" => "KABUPATEN BULUNGAN"],
            ['id' =>  6503, "id_provinsi" => 65, "kode_kota" => 6503, "nama_kota" => "KABUPATEN TANA TIDUNG"],
            ['id' =>  6504, "id_provinsi" => 65, "kode_kota" => 6504, "nama_kota" => "KABUPATEN NUNUKAN"],
            ['id' =>  6571, "id_provinsi" => 65, "kode_kota" => 6571, "nama_kota" => "KOTA TARAKAN"],
 
            ['id' =>  7101, "id_provinsi" => 71, "kode_kota" => 7101, "nama_kota" => "KABUPATEN BOLAANG MONGONDOW"],
            ['id' =>  7102, "id_provinsi" => 71, "kode_kota" => 7102, "nama_kota" => "KABUPATEN MINAHASA"],
            ['id' =>  7103, "id_provinsi" => 71, "kode_kota" => 7103, "nama_kota" => "KABUPATEN KEPULAUAN SANGIHE"],
            ['id' =>  7104, "id_provinsi" => 71, "kode_kota" => 7104, "nama_kota" => "KABUPATEN KEPULAUAN TALAUD"],
            ['id' =>  7105, "id_provinsi" => 71, "kode_kota" => 7105, "nama_kota" => "KABUPATEN MINAHASA SELATAN"],
          
            ['id' =>  7201, "id_provinsi" => 72, "kode_kota" => 7201, "nama_kota" => "KABUPATEN BANGGAI KEPULAUAN"],
            ['id' =>  7202, "id_provinsi" => 72, "kode_kota" => 7202, "nama_kota" => "KABUPATEN BANGGAI"],
            ['id' =>  7203, "id_provinsi" => 72, "kode_kota" => 7203, "nama_kota" => "KABUPATEN MOROWALI"],
            ['id' =>  7204, "id_provinsi" => 72, "kode_kota" => 7204, "nama_kota" => "KABUPATEN POSO"],
            ['id' =>  7205, "id_provinsi" => 72, "kode_kota" => 7205, "nama_kota" => "KABUPATEN DONGGALA"],
            ['id' =>  7271, "id_provinsi" => 72, "kode_kota" => 7271, "nama_kota" => "KOTA PALU"],
 
            ['id' =>  7301, "id_provinsi" => 73, "kode_kota" => 7301, "nama_kota" => "KABUPATEN KEPULAUAN SELAYAR"],
            ['id' =>  7302, "id_provinsi" => 73, "kode_kota" => 7302, "nama_kota" => "KABUPATEN BULUKUMBA"],
            ['id' =>  7303, "id_provinsi" => 73, "kode_kota" => 7303, "nama_kota" => "KABUPATEN BANTAENG"],
            ['id' =>  7304, "id_provinsi" => 73, "kode_kota" => 7304, "nama_kota" => "KABUPATEN JENEPONTO"],
            
            ['id' =>  7401, "id_provinsi" => 74, "kode_kota" => 7401, "nama_kota" =>"KABUPATEN BUTON"],
            ['id' =>  7402, "id_provinsi" => 74, "kode_kota" => 7402, "nama_kota" =>"KABUPATEN MUNA"],
            ['id' =>  7403, "id_provinsi" => 74, "kode_kota" => 7403, "nama_kota" =>"KABUPATEN KONAWE"],
   
            ['id' =>  7501, "id_provinsi" => 75, "kode_kota" => 7501, "nama_kota" =>"KABUPATEN BOALEMO"],
            ['id' =>  7502, "id_provinsi" => 75, "kode_kota" => 7502, "nama_kota" =>"KABUPATEN GORONTALO"],
            ['id' =>  7503, "id_provinsi" => 75, "kode_kota" => 7503, "nama_kota" =>"KABUPATEN POHUWATO"],
            ['id' =>  7504, "id_provinsi" => 75, "kode_kota" => 7504, "nama_kota" =>"KABUPATEN BONE BOLANGO"],
            ['id' =>  7505, "id_provinsi" => 75, "kode_kota" => 7505, "nama_kota" =>"KABUPATEN GORONTALO UTARA"],
 
            ['id' =>  7601, "id_provinsi" => 76, "kode_kota" => 7601, "nama_kota" =>"KABUPATEN MAJENE"],
            ['id' =>  7602, "id_provinsi" => 76, "kode_kota" => 7602, "nama_kota" =>"KABUPATEN POLEWALI MANDAR"],
            ['id' =>  7603, "id_provinsi" => 76, "kode_kota" => 7603, "nama_kota" =>"KABUPATEN MAMASA"],
            ['id' =>  7604, "id_provinsi" => 76, "kode_kota" => 7604, "nama_kota" =>"KABUPATEN MAMUJU"],
            ['id' =>  7605, "id_provinsi" => 76, "kode_kota" => 7605, "nama_kota" =>"KABUPATEN MAMUJU UTARA"],
            
            ['id' =>  8101, "id_provinsi" => 81, "kode_kota" => 8101, "nama_kota" =>"KABUPATEN MALUKU TENGGARA BARAT"],
            ['id' =>  8102, "id_provinsi" => 81, "kode_kota" => 8102, "nama_kota" =>"KABUPATEN MALUKU TENGGARA"],
            ['id' =>  8103, "id_provinsi" => 81, "kode_kota" => 8103, "nama_kota" =>"KABUPATEN MALUKU TENGAH"],
            ['id' =>  8104, "id_provinsi" => 81, "kode_kota" => 8104, "nama_kota" =>"KABUPATEN BURU"],
            ['id' =>  8105, "id_provinsi" => 81, "kode_kota" => 8105, "nama_kota" =>"KABUPATEN KEPULAUAN ARU"],
 
            ['id' =>  8201, "id_provinsi" => 82, "kode_kota" => 8201, "nama_kota" =>"KABUPATEN HALMAHERA BARAT"],
            ['id' =>  8202, "id_provinsi" => 82, "kode_kota" => 8202, "nama_kota" =>"KABUPATEN HALMAHERA TENGAH"],
            ['id' =>  8203, "id_provinsi" => 82, "kode_kota" => 8203, "nama_kota" =>"KABUPATEN KEPULAUAN SULA"],
            ['id' =>  8204, "id_provinsi" => 82, "kode_kota" => 8204, "nama_kota" =>"KABUPATEN HALMAHERA SELATAN"],
            ['id' =>  8271, "id_provinsi" => 82, "kode_kota" => 8271, "nama_kota" =>"KOTA TERNATE"],
            ['id' =>  8272, "id_provinsi" => 82, "kode_kota" => 8272, "nama_kota" =>"KOTA TIDORE KEPULAUAN"],
 
            ['id' =>  9401, "id_provinsi" => 94, "kode_kota" => 9401, "nama_kota" =>"KABUPATEN MERAUKE"],
            ['id' =>  9402, "id_provinsi" => 94, "kode_kota" => 9402, "nama_kota" =>"KABUPATEN JAYAWIJAYA"],
            ['id' =>  9403, "id_provinsi" => 94, "kode_kota" => 9403, "nama_kota" =>"KABUPATEN JAYAPURA"],
            ['id' =>  9404, "id_provinsi" => 94, "kode_kota" => 9404, "nama_kota" =>"KABUPATEN NABIRE"],
            ['id' =>  9408, "id_provinsi" => 94, "kode_kota" => 9408, "nama_kota" =>"KABUPATEN KEPULAUAN YAPEN"],
  
                                    
         ]);
    }
}
