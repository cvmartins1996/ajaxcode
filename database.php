<?php

// Conexao com banco de dados
$conexao = mysqli_connect('localhost','root','','ajaxtest');

// check for Get variable
if(isset($_GET['nome'])){
    echo 'GET: Seu nome é '.$_GET['nome'];
}
// check for Post variable
if(isset($_POST['nome'])){
    $nome = mysqli_real_escape_string($conexao,$_POST['nome']);
    //echo 'POST: Seu nome é '.$_POST['nome'];

    $query = "INSERT INTO users(nome) VALUES ('$nome')";

    if(mysqli_query($conexao, $query)){
        echo 'Usuario preenchido';
    } else{
        echo 'Erro: '. mysqli_error($conexao);
    }
}