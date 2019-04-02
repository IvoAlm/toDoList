<?php
include('cabecalho.php');
$id = $_GET['id'];

$conexao = mysqli_connect("localhost", "root", "", "ToDoList");
$query2 = "DELETE FROM todolist.atividades WHERE id = '$id'";
$resultado = mysqli_query($conexao,$query2);
if ($resultado){ ?>
    <p class="text-success">A Tarefa com ID <?= $id?>, foi deletada com  sucesso!!</p>
<?php } else{
    $msg = mysqli_error($conexao);
    ?>
    <p class="text-danger"><b>A tarefa com ID <?= $id?>' não foi deletada: </b><?= $msg; ?> </p>
<?php }
include('rodape.php')
?>
