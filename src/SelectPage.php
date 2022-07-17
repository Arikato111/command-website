<?php return function ($page) {
    $Home = require('./src/Home.php');

    if(file_exists('./src/pages/' . $page . '.php')) {
        $Pages = require('./src/pages/' . $page . '.php');
        return $Pages();
    } else {
        return $Home('Notfound page');
    }
};