<?php

use Illuminate\Database\Seeder;

class ProdutosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Produtos::create([
            'descricao' => str_random(100),
            'peso' => 1.78,
            'cor' => 'preto',
            'preco' => 1000.99,
            'marca_id' => 1,
        ]);
    }
}
