<?php

use Illuminate\Database\Seeder;
use App\Product;
use Faker\Generator as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
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

        for ($i=0; $i < 10; $i++) { 
            $nuovoProdotto = new Product();
            $nuovoProdotto->name = $faker->word;
            $nuovoProdotto->price = $faker->numberBetween($min = 20, $max = 100);
            $nuovoProdotto->save();
        }
    }
}
