<?php

include 'controller.php';

$header = render('header',array());
$mainCont = render('main-content',array());
if(!empty($_GET)) {
    switch ($_GET['par1']) {
        case 0:
            $mainCont = render('main-content', array());
            break;
        case 1:
            $mainCont = render('home-flower', array());
            break;
        case 2:
            $mainCont = render('out-flower', array());
            break;
        case 3:
            $mainCont = render('buket', array());
            break;
        case 4:
            $mainCont = render('grunt', array());
            break;
        case 5:
            $mainCont = render('himiya', array());
            break;
        case 6:
            $mainCont = render('gorshki', array());
            break;
        case 7:
            $mainCont = render('about', array());
            break;
        case 8:
            $mainCont = render('about-author', array());
            break;
    }
}

$footer= render('footer',array());

echo render('main',array('header'=>$header,'mainCont'=>$mainCont,'footer'=> $footer));
?>