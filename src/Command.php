<?php return function(){
    $Home = require('./src/Home.php');

    $showAllPage = function(){
        $all_page = '';
        $pages = glob('./src/pages/*.php');
        foreach($pages as $p){
            $rename_page = explode('/', $p);
            $real_name = substr($rename_page[sizeof($rename_page) -1], 0, -4);
            $all_page .='-> ' . $real_name . '&#10;';
        }
        return 'pages &#10;'. $all_page;
    };
    $showAllPage();
    
    $cmd = explode(' ', $_POST['command']);
    switch($cmd[0]) {
        case 'ls': 
            return $Home($showAllPage());
        case '->':
            $SelectPage =require('./src/SelectPage.php');
            return $SelectPage($cmd[1]);
        default :
        return $Home('Not found command');
    }
    return $Home();
};