<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Outlet::create([
            'nama'  => 'karawang',
            'alamat'    => 'karawang',
            'tlp'       => '081'
        ]);
    }
}
