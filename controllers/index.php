<?php
// контролер
Class Controller_Index Extends Controller_Base {
	
	// шаблон
	public $layouts = "main";
	
	// экшен
	function index() {
		$this->template->view('mainContent');
	}

    function product() {
       $id =$_GET["id"];
       $product=$_GET["table"];
        $select = array(
            'where' => 'id = '.$id,'category =  '."'".$product."'" // условие
        );
        $model = new model_product($select); // создаем объект модели

        $flowersInfo = $model->getAllRows(); // получаем все строки
        $this->template->vars('flowersInfo', $flowersInfo);
        $this->template->view('product');
    }

    function catalog(){
        $category=$_GET["category"];
        $select = array(
            'where' => 'category =  '."'".$category."'" // условие
        );
        $model = new model_product($select); // создаем объект модели
        $flowersInfo = $model->getAllRows(); // получаем все строки;
        $this->template->vars('flowersInfo', $flowersInfo);
        $this->template->view($category);
    }
    function about(){
        $this->template->view('about');
    }
    function aboutAuthor(){
        $this->template->view('aboutAuthor');
    }




}