<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ciudads')->insert([
            'name' => 'Palmira',
            'id_departamento' => '1',
        ]);
        DB::table('ciudads')->insert([
            'name' => 'Cali',
            'id_departamento' => '1',
        ]);
        DB::table('ciudads')->insert([
            'name' => 'Pereira',
            'id_departamento' => '3',
        ]);

        DB::table('ciudads')->insert([
            'name' => 'Armenia',
            'id_departamento' => '2',
        ]);

        DB::table('ciudads')->insert([
            'name' => 'Tulua',
            'id_departamento' => '1',
        ]);

        DB::table('ciudads')->insert([
            'name' => 'Buga',
            'id_departamento' => '1',
        ]);

        DB::table('ciudads')->insert([
            'name' => 'Buenaventura',
            'id_departamento' => '1',
        ]);


        DB::table('ciudads')->insert([
            'name' => 'Piendamo',
            'id_departamento' => '4',
        ]);
    }
}
