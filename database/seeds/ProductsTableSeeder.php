<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prodotti = [
            [
                'nome' => 'Ammaccabanane',
                'prezzo' => 50
            ],
            [
                'nome' => 'Sparaporte',
                'prezzo' => 32
            ],
            [
                'nome' => 'Pipa dorata',
                'prezzo' => 60
            ]
        ];
        
        foreach ($prodotti as $prodotto) {
            $nuovo_prodotto = new Product();
            $nuovo_prodotto->name = $prodotto['nome'];
            $nuovo_prodotto->price = $prodotto['prezzo'];
            $nuovo_prodotto->save();
        };
    }
}
