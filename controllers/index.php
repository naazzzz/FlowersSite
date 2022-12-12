<?php
// контролер
Class Controller_Index Extends Controller_Base {
	
	// шаблон
	public $layouts = "main";
	
	// экшен
	function index() {
        $select = array(
            'where' => 'id = 1' // условие
        );

        $model = new model_content($select); // создаем объект модели
        $contentInfo = $model->getAllRows(); // получаем все строки
        $this->template->vars('contentInfo', $contentInfo);
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
        $select = array(
            'where' => 'id = 1' // условие
        );

        $model = new model_content($select); // создаем объект модели
        $contentInfo = $model->getAllRows(); // получаем все строки
        $this->template->vars('contentInfo', $contentInfo);
        $this->template->view('about');
    }
    function aboutAuthor(){
        $select = array(
            'where' => 'id = 1' // условие
        );

        $model = new model_content($select); // создаем объект модели
        $contentInfo = $model->getAllRows(); // получаем все строки
        $this->template->vars('contentInfo', $contentInfo);
        $this->template->view('aboutAuthor');
    }
    function moderationAuth(){
            $this->template->view('moderationAuth');
    }
    function moderation(){
        if ($_POST["pass"] == 1234) {
            $select = array(
                'where' => 'id >=1 ' // условие
            );
            $model = new model_content($select); // создаем объект модели
            $contentInfo = $model->getAllRows(); // получаем все строки;
            $this->template->vars('contentInfo', $contentInfo);

            $model = new model_product($select); // создаем объект модели
            $flowersInfo = $model->getAllRows(); // получаем все строки;
            $this->template->vars('flowersInfo', $flowersInfo);
            $this->template->view('moderation');
        }
    }

    function moderationContent(){
        if($_POST["pass"] == 1234){

            $modelContent= new model_content();
            $modelContent->id=1;
            //обязательно с экранированием
            $modelContent->mainPage=htmlspecialchars($_POST["mainCont"]);
            $modelContent->aboutAuthor=htmlspecialchars($_POST["authorCont"]);
            $modelContent->about=htmlspecialchars($_POST["aboutCont"]);
            $modelContent->update();


            $select = array(
                'where' => 'id >=1 ' // условие
            );
            $model = new model_content($select); // создаем объект модели
            $contentInfo = $model->getAllRows(); // получаем все строки;
            $this->template->vars('contentInfo', $contentInfo);

            $model = new model_product($select); // создаем объект модели
            $flowersInfo = $model->getAllRows(); // получаем все строки;
            $this->template->vars('flowersInfo', $flowersInfo);
            $this->template->view('moderation');
        }
    }

    function moderationProductUpdate(){
        if($_POST["pass"] == 1234){

            $modelProduct = new model_product();
            $modelProduct->id=$_POST["id"];;
            $modelProduct->name=$_POST["name"];
            $modelProduct->price=$_POST["price"];
            $modelProduct->img=$_POST["img"];
            $modelProduct->category=$_POST["category"];
            $modelProduct->description=$_POST["description"];
            $modelProduct->update();

            $select = array(
                'where' => 'id >=1 ' // условие
            );
            $model = new model_content($select); // создаем объект модели
            $contentInfo = $model->getAllRows(); // получаем все строки;
            $this->template->vars('contentInfo', $contentInfo);

            $model = new model_product($select); // создаем объект модели
            $flowersInfo = $model->getAllRows(); // получаем все строки;
            $this->template->vars('flowersInfo', $flowersInfo);
            $this->template->view('moderation');
        }
    }

    function moderationProductDelete(){
        if($_POST["pass"] == 1234) {

            $modelProduct = new model_product();
            $modelProduct->id=$_POST["id"];;
            $modelProduct->name=$_POST["name"];
            $modelProduct->price=$_POST["price"];
            $modelProduct->img=$_POST["img"];
            $modelProduct->category=$_POST["category"];
            $modelProduct->description=$_POST["description"];
            $modelProduct->deleteRow();


            $select = array(
                'where' => 'id >=1 ' // условие
            );
            $model = new model_content($select); // создаем объект модели
            $contentInfo = $model->getAllRows(); // получаем все строки;
            $this->template->vars('contentInfo', $contentInfo);

            $model = new model_product($select); // создаем объект модели
            $flowersInfo = $model->getAllRows(); // получаем все строки;
            $this->template->vars('flowersInfo', $flowersInfo);
            $this->template->view('moderation');
        }
    }

    function moderationProductAdd(){
        if($_POST["pass"] == 1234) {

            $modelProduct = new model_product();
            $modelProduct->name=$_POST["name"];
            $modelProduct->price=$_POST["price"];
            $modelProduct->img=$_POST["img"];
            $modelProduct->category=$_POST["category"];
            $modelProduct->description=$_POST["description"];
            $modelProduct->save();

            $select = array(
                'where' => 'id >=1 ' // условие
            );
            $model = new model_content($select); // создаем объект модели
            $contentInfo = $model->getAllRows(); // получаем все строки;
            $this->template->vars('contentInfo', $contentInfo);

            $model = new model_product($select); // создаем объект модели
            $flowersInfo = $model->getAllRows(); // получаем все строки;
            $this->template->vars('flowersInfo', $flowersInfo);
            $this->template->view('moderation');
        }
    }

    function downloadFile(){
        if($_POST["pass"] == 1234) {
            $uploaddir = 'C:/Apache24/htdocs/FlowersSite/img/';
            $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                echo "Файл корректен и был успешно загружен.\n";
            } else {
                echo "Файл не был загружен\n";
            }


            $select = array(
                'where' => 'id >=1 ' // условие
            );
            $model = new model_content($select); // создаем объект модели
            $contentInfo = $model->getAllRows(); // получаем все строки;
            $this->template->vars('contentInfo', $contentInfo);

            $model = new model_product($select); // создаем объект модели
            $flowersInfo = $model->getAllRows(); // получаем все строки;
            $this->template->vars('flowersInfo', $flowersInfo);
            $this->template->view('moderation');
        }
        }

}