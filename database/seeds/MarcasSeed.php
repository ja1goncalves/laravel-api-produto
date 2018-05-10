<?php

use Illuminate\Database\Seeder;

class MarcasSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Marca::create([
            'name' => 'DELL',
        ]);
    }
}
