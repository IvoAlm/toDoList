<?php
include('cabecalho.php');
$id = $_GET['id'];
$conexao = mysqli_connect("localhost", "root", "", "ToDoList");
$query2 = "UPDATE todolist.atividades SET atividade_feita = 'Sim', data_feita = NOW() WHERE id = {$id}";
$resultado = mysqli_query($conexao,$query2);
if ($resultado){ ?>
    <p class="text-success">A Tarefa com ID <?= $id?>, foi feita com  sucesso!!</p>
<?php } else{
    $msg = mysqli_error($conexao);
    ?>
    <p class="text-danger"><b>A tarefa com ID <?= $id?>' não foi feita: </b><?= $msg; ?> </p> </p>
<?php }
include('rodape.php')
?>
