<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        DB::table('faqs')->insert([
            'username' => "admin",
            'email' => Str::random(10)."@gmail.com",
            'pertanyaan' => Str::random(100),
            'created_at' => $now,
        ]);
    }
}
