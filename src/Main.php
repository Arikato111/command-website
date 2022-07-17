<?php
return function () {
    session_start(); // <-- you can delete if don't need to use
    require('./modules/module-import/main.m.php'); // module-import from modules to use module function
    ['SwitchPath' => $SwitchPath, 'Route' => $Route] = module('wisit-router');
    $HomePage = require('./src/Home.php'); // require Home page from Home.php
    $Command = require('./src/Command.php');

    if(isset($_POST['command'])) return $Command();

    return $HomePage();
}; // <-- don't forgot to write ';'
