<?php
/**
 * Created by PhpStorm.
 * User: Vitalii
 * Date: 28.12.2014
 * Time: 22:59
 */

class ProductTableSeeder extends DatabaseSeeder{
    public function run(){
        $faker = $this->getFaker();

        $categories = Category::all();

        foreach($categories as $category){

            for($i=0; $i<rand(-1, 10); $i++){ //tand() - this function generate random number
                $name = ucwords($faker->word);
                //$stock = $faker->randomNumber(0, 100);
                $stock = $faker->numberBetween(0,100);
                $price = $faker->randomFloat(2,5,100);

                Product::create([
                    "name" => $name,
                    "stock" => $stock,
                    "price" => $price,
                    "category_id" => $category->id
                ]);
            }
        }
    }
}