<?php
include('cabecalho.php');
$tarefa= $_GET["registro"];
$data= $_GET["data_marcada"];
$descricao= $_GET["descricao"];
$conexao = mysqli_connect("localhost", "root", "", "ToDoList");
$query = "Insert into atividades(tarefa, data_marcada, descricao) values ('{$tarefa}', '{$data}', '{$descricao}')";
$resultado = mysqli_query($conexao,$query);
if ($resultado){ ?>
    <p class="text-success">A tarefa '<?= $tarefa;?>' com a data marcada para <?= $data;?>, foi adicionada com  sucesso!!</p>
<?php } else{
    $msg = mysqli_error($conexao);
    ?>
    <p class="text-danger"><b>A tarefa <?= $tarefa;?> não foi adicionada:</b><?= $msg; ?> </p>
<?php }
include('rodape.php')
?>


