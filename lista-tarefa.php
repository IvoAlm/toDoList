<?php
$conexao = mysqli_connect("localhost", "root", "", "ToDoList");
$query = "SELECT * FROM todolist.atividades;";
$resultado = mysqli_query($conexao,$query);
$lista = mysqli_fetch_all($resultado);



