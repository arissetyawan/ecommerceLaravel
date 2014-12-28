<?php
/**
 * Created by PhpStorm.
 * User: Vitalii
 * Date: 28.12.2014
 * Time: 22:06
 */
class AccountTableSeeder extends DatabaseSeeder{
    public function run(){
        $faker = $this->getFaker();

        for($i=0; $i<10; $i++){
            $email = $faker->email;
            $password = Hash::make("password");


            Account::create([
                "email"=>$email,
                "password"=>$password
            ]);
        }
    }
}