<?php

use Illuminate\Database\Seeder;

class setting_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $name=['Nama Perusahaan','Alamat','Nomer Telepon','Email'];
        $type=['text','text','text','text'];
        $description=[
            'Kasypj',
            'Jl. Pulomas Selatan Kav. No.22, RT.4/RW.9, Kayu Putih, Kec. Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13210',
            '021-29335597',
            '2019104497@kalbis.ac.id'
        ];
        for($i=0;$i<count($name);$i++){

            App\Setting::create([
                'id'=>$faker->uuid,
                'name'=> $name[$i],
                'slug'=> str_slug($name[$i]),
                'type'=> $type[$i],
                'description'=> $description[$i]
            ]);
        }
    }
}
