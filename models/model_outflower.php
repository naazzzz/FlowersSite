<?php

class Model_Outflower extends Model_Base
{
public $name;
public $price;
public $size;
public $high;
public $sort;
public $id;

    public function fieldsTable(){
        return array(
            'id' => 'Id',
            'name' => 'name',
            'price' => 'price',
            'size' => 'size',
            'high' => 'high',
            'sort' => 'sort'
        );
    }
}