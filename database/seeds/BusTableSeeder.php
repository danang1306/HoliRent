<?php

use Illuminate\Database\Seeder;
use App\Bus;
class BusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bus = ['Pariwisata Ciampea','Pariwisata Bali','StudyTour Gunung Sindur'];
        $tipe = ['NonHD','DD','SHD'];
        $img = ['bus1.jpg','bus2.jpg','bus3.jpg'];
        $harga = [300000,500000,450000];
        $kursi = [40,90,70];
        foreach($bus as $nomor => $items){
        $data[] = [
            'kode_bus' => 'HR-'.mt_rand(1000000,9999999),
            'name' => $items,
            'tipe' => $tipe[$nomor],
            'img' => $img[$nomor],
            'h_sewa' => $harga[$nomor],
            'j_kursi' =>  $kursi[$nomor]
            ];
        }
        Bus::insert($data);
    }
}
