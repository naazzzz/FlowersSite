<?php

class model_product Extends Model_Base
{
    public $name;
    public $price;
    public $id;
    public $img;
    public $description;
    public $category;

    public function fieldsTable()
    {
        return array(
            'id' => 'Id',
            'name' => 'name',
            'price' => 'price',
            'img' => 'img',
            'description' => 'description',
            'category' => 'category'
        );
    }

}