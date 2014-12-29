<?php
/**
 * Created by PhpStorm.
 * User: Vitalii
 * Date: 30.12.2014
 * Time: 0:03
 */

class CategoryController extends BaseController{

    public function indexAction(){
        return Category::with(["products"])->get(); // with() - загружає із  таблиці Категорії тільки масив назв продуктів, а не всіх полів
    }



}

