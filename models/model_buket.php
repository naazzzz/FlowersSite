<?php

class Model_Buket extends Model_Base
{
public $name;
public $price;
public $amount;
public $id;

    public function fieldsTable(){
        return array(
            'id' => 'Id',
            'name' => 'name',
            'amount' => 'amount',
            'size' => 'size'
        );
    }
}