<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BimbelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bimbels')->insert([
            'name' => 'SD Sederajat',
            'desc' => 'SD / MI',
        ]);

         DB::table('bimbels')->insert([
            'name' => 'SMP Sederajat',
            'desc' => 'SMP / MTs',
        ]);
    }
}
