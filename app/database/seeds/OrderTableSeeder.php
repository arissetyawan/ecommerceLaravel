<?php
/**
 * Created by PhpStorm.
 * User: Vitalii
 * Date: 28.12.2014
 * Time: 23:10
 */

class OrderTableSeeder extends DatabaseSeeder{
    public function run(){
        $faker = $this->getFaker();

        $accounts = Account::all();

        foreach($accounts as $account){
            for($i=0; $i<rand(-1,5); $i++){
                Order::create([
                    "account_id" => $account->id
                ]);
            }
        }
    }
}

