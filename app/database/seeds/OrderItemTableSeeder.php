<?php
/**
 * Created by PhpStorm.
 * User: Vitalii
 * Date: 28.12.2014
 * Time: 23:55
 */

class OrderItemTableSeeder extends DatabaseSeeder{
    public function run(){
        $faker = $this->getFaker();

        $orders = Order::all();
        $products = Product::all()->toArray(); // return PHP array similar to the fixed array,

        foreach($orders as $order){
            $used = [];

            for($i=0; $i<rand(1,5); $i++){
                $product = $faker->randomElement($products);

                if(!in_array($product["id"], $used)){ //in_array — Проверяет, присутствует ли в массиве значение

                    $id = $product["id"];
                    $price = $product["price"];
                    //$quantity = $faker->randomNumber(1,3);
                    $quantity = $faker->numberBetween(1,3);

                    OrderItem::create([
                        "order_id" => $order->id,
                        "product_id" => $id,
                        "price" => $price,
                        "quantity" => $quantity
                    ]);

                    $used[] = $product["id"];
                }

            }


        }


    }



}



