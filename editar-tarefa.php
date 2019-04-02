<?php include('cabecalho.php');
$id = $_GET["id"];
$conexao = mysqli_connect("localhost", "root", "", "ToDoList");
$query = "SELECT * FROM todolist.atividades WHERE id = '$id';";
$resultado = mysqli_query($conexao,$query);
$lista = mysqli_fetch_all($resultado);
?>
<form action="update-tarefa.php?id=".$id>
    <fieldset>
    Tarefa:<br>
    <input type="text" name="tarefa" value=""><br>
    Data:<br>
    <input type="date" name="data"  value=" "><br>
    Descrição:<br>
    <textarea name="descricao" ></textarea>
    <input type="hidden" name="id" value="<?= $id?>">
    <input type="submit" name="submit" value="Submit">
    </fieldset>
</form>


<?php
include('rodape.php');?>
