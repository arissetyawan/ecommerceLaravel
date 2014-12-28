<?php
/**
 * Created by PhpStorm.
 * User: Vitalii
 * Date: 28.12.2014
 * Time: 22:54
 */

class CategoryTableSeeder extends DatabaseSeeder{
    public function run(){
        $faker = $this->getFaker();

        for($i=0; $i<10; $i++){
            $name = ucwords($faker->word); // ucwords() - this function make all string in UPPERCASE

            Category::create([
                "name" => $name
            ]);
        }
    }
}