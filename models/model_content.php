<?php

class model_content Extends Model_Base
{
    public $id;
    public $mainPage;
    public $aboutAuthor;
    public $about;

    public function fieldsTable()
    {
        return array(
            'id' => 'Id',
            'mainPage' => 'mainPage',
            'aboutAuthor' => 'aboutAuthor',
            'about' => 'about'
        );
    }

}