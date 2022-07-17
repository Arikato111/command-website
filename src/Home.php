<?php
return function ($old_cmd = '') { // it has no function's name , It will return to variable when got require
    ['title' => $title] = require('./modules/wisit-router/main.m.php'); // import module as function

    $title('Home'); // use title function to change title
    return <<<HTML
        <div class="content">
            <style>
                * {
                    cursor: none;
                }
            </style>
            <div class="container">
            <textarea class="area-text" disabled id="root" cols="30" rows="10">~@ {$old_cmd}_</textarea>
            <div>
                <form action="/" id="forum" method="post">
                    <input autofocus type="text" id="input" placeholder="command" name="command">
                </form>
            </div>
        </div>           
        </div>
        HTML;
};
