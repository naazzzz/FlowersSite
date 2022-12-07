<?php
// контролер
Class Controller_Index Extends Controller_Base {
	
	// шаблон
	public $layouts = "main";
	
	// экшен
	function index() {
		$this->template->view('main-content');
	}

    function product() {
       $id =$_GET["id"];
       $product=$_GET["table"];
        $select = array(
            'where' => 'id = '.$id, // условие
        );
        switch ($product){
            case "homeflower":
                $model = new Model_Homeflower($select); // создаем объект модели
                break;
            case "outflower":
                $model = new Model_Outflower($select); // создаем объект модели
                break;
            case "himiya":
                $model = new Model_Himiya($select); // создаем объект модели
                break;
            case "grunt":
                $model = new Model_Grunt($select); // создаем объект модели
                break;
            case "gorshki":
                $model = new Model_Gorshki($select); // создаем объект модели
                break;
            case "buket":
                $model = new Model_Buket($select); // создаем объект модели
                break;
        }

        $flowersInfo = $model->getAllRows(); // получаем все строки
        $this->template->vars('flowersInfo', $flowersInfo);
        $this->template->view('product');
    }

    function homeFlower(){
        $select = array(
            'where' => 'id >= 1', // условие
        );
        $model = new Model_Homeflower($select); // создаем объект модели
        $flowersInfo = $model->getAllRows(); // получаем все строки
        $this->template->vars('flowersInfo', $flowersInfo);
        $this->template->view('home-flower');

    }

    function outFlower(){
        $select = array(
            'where' => 'id >= 1', // условие
        );
        $model = new Model_Outflower($select); // создаем объект модели
        $flowersInfo = $model->getAllRows(); // получаем все строки
        $this->template->vars('flowersInfo', $flowersInfo);
        $this->template->view('out-flower');
    }

    function buket(){
        $select = array(
            'where' => 'id >= 1', // условие
        );
        $model = new Model_Buket($select); // создаем объект модели
        $flowersInfo = $model->getAllRows(); // получаем все строки
        $this->template->vars('flowersInfo', $flowersInfo);
        $this->template->view('buket');
    }

    function grunt(){
        $select = array(
            'where' => 'id >= 1', // условие
        );
        $model = new Model_Grunt($select); // создаем объект модели
        $flowersInfo = $model->getAllRows(); // получаем все строки
        $this->template->vars('flowersInfo', $flowersInfo);
        $this->template->view('grunt');
    }

    function himiya(){
        $select = array(
            'where' => 'id >= 1', // условие
        );
        $model = new Model_Himiya($select); // создаем объект модели
        $flowersInfo = $model->getAllRows(); // получаем все строки
        $this->template->vars('flowersInfo', $flowersInfo);
        $this->template->view('himiya');
    }
    function gorshki(){
        $select = array(
            'where' => 'id >= 1', // условие
        );
        $model = new Model_Gorshki($select); // создаем объект модели
        $flowersInfo = $model->getAllRows(); // получаем все строки
        $this->template->vars('flowersInfo', $flowersInfo);
        $this->template->view('gorshki');
    }
    function about(){
        $this->template->view('about');
    }
    function aboutAuthor(){
        $this->template->view('about-author');
    }




}