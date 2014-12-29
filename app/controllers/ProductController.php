<?php
/**
 * Created by PhpStorm.
 * User: Vitalii
 * Date: 30.12.2014
 * Time: 0:08
 */

class ProductController extends BaseController{

    public function indexAction(){
        $query = Product::with(["category"]);
        $category = Input::get("category"); // получаю Input із введеного значення , що передається

        if($category){
            $query->where("category_id", $category); //category_id = $category
        }

        return $query->get();
    }

}



