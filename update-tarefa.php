<?php
include('cabecalho.php');
$id = $_GET['id'];
$tarefa = $_GET['tarefa'];
$data = $_GET['data'];
$descricao = $_GET['descricao'];
$conexao = mysqli_connect("localhost", "root", "", "ToDoList");
$query2 = "UPDATE todolist.atividades SET tarefa = '$tarefa', data_marcada = '$data', descricao = '$descricao' WHERE id = {$id}";
$resultado = mysqli_query($conexao,$query2);
if ($resultado){ ?>
    <p class="text-success">A Tarefa '<?= $tarefa;?>' com data marcada para <?= $data;?>, foi editada com  sucesso!!</p>
<?php } else{
    $msg = mysqli_error($conexao);
    ?>
    <p class="text-danger"><b>A tarefa '<?= $tarefa;?>' não foi editada: </b><?= $msg; ?> </p>
<?php }
include('rodape.php')
?>
