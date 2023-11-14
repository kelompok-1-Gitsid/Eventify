<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vendor;

class VendorSeeder extends Seeder
{
    public function run()
    {
        Vendor::create([
            'nama' => 'Uvuvevwe',
            'alamat' => 'Jl. Bungur',
            'telepon' => '123456789',
            'email'=> 'Uvuvevwe@gamil.com',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, repellendus, tempora impedit incidunt quas sequi reprehenderit non fuga facere quo ex adipisci laudantium unde eius ipsa voluptatum aperiam ipsum. Delectus animi soluta eos molestias minima repellendus molestiae, veniam iusto porro facere. Ab atque quae quaerat in corrupti, iste maxime eum ea saepe soluta necessitatibus illo.' ,
        ]);

        // Tambahkan data vendor lainnya sesuai kebutuhan
    }
}
