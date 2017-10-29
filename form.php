<?php

//echo 'Processando...';

// check for Get variable
if(isset($_GET['nome'])){
    echo 'GET: Seu nome é '.$_GET['nome'];
}
// check for Post variable
if(isset($_POST['nome'])){
    echo 'POST: Seu nome é '.$_POST['nome'];
}