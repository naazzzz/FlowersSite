<?php
// контролер
Class Controller_Index Extends Controller_Base {
	
	// шаблон
	public $layouts = "main";
	
	// экшен
	function index() {
		$this->template->view('main-content');
	}

    function homeFlower(){
        $this->template->view('home-flower');
    }

    function outFlower(){
        $this->template->view('out-flower');
    }

    function buket(){
        $this->template->view('buket');
    }

    function grunt(){
        $this->template->view('grunt');
    }

    function himiya(){
        $this->template->view('himiya');
    }
    function gorshki(){
        $this->template->view('gorshki');
    }
    function about(){
        $this->template->view('about');
    }
    function aboutAuthor(){
        $this->template->view('about-author');
    }
}