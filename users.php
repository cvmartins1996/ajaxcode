<?php

// Conexao com banco de dados
$conexao = mysqli_connect('localhost','root','','ajaxtest');

$query = 'SELECT * FROM users';

// Get result
$result = mysqli_query($conexao, $query);

// Fetch data
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($users);
