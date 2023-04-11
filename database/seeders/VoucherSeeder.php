<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = ['Menunggu', 'Dikonfirmasi'];
        for($i=0;$i<10;$i++){
            DB::table('vouchers')->insert([
                'nama_voucher' => ("Crewneck Diskon 60%"),
                'deskripsi' => ("Dapatkan Kode Promo Diskon Crewneck 60% Di Uniqlo"),
                'kode' => ("INIKODE25"),
                'toko' => ("Uniqlo"),
                'kategori' => ("Pakaian"),
                'syarat' => ("Berlaku Sampai 30 Maret"),
                'kuota' => (25),
                'status' => Arr::random($status),
                'gambar' => ("uniqlo1.png"),
                'masa_kadaluarsa' => Carbon::now(30),
            ]);
        }

    }
}
