<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Outlet;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Outlet::create([
            'nama' => 'Outlet 1',
            'alamat' => 'Jl. Adiarsa',
            'telp' => '081234567890'
        ]);
        
        Outlet::create([
            'nama' => 'Outlet 2',
            'alamat' => 'Jl. Teluk jambe',
            'telp' => '081234567891'
        ]);
        
        // tambahkan data outlet lainnya sesuai kebutuhan
    }
}
