<?php

class Model_Himiya extends Model_Base
{
public $name;
public $price;
public $size;
public $id;

    public function fieldsTable(){
        return array(
            'id' => 'Id',
            'name' => 'name',
            'price' => 'price',
            'size' => 'size'
        );
    }
}