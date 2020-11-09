<?php
//render vista

require APP.'/src/render.php';
//si esta definida la session
$uname=$_SESSION['username'] ?? ''; //operador cualescencia si no esta definido entonces email seria ''
echo render('home',['title' =>'Todo '.$uname]);
