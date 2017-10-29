<?php

echo 'Processando...';

// check for Get variable
if(isset($_GET['nome'])){
    echo 'GET: Seu nome é '.$_GET['nome'];
}