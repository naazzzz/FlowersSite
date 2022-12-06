<?php

function render($tmp, $vars=array()){
    if(file_exists('view/'.$tmp.'.php')){
        ob_start();
        extract($vars);
        require 'view/'.$tmp.'.php';
        return ob_get_clean();
    }
}

?>