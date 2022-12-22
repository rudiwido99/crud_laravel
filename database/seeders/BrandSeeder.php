<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
                'name' => 'Addidas',
                'desc' => 'Jersey Olahraga Kualitas Premium'
            ],
            [
                'name' => 'Nike',
                'desc' => 'Jersey Olahraga Kualitas Premium'
            ],
            [
                'name' => 'Puma',
                'desc' => 'Jersey Olahraga Kualitas Premium'
            ],
    ]);
    }
}
