<?php
include('cabecalho.php');
$tarefa= $_GET["registro"];
$data= $_GET["data_marcada"];
$descricao= $_GET["descricao"];

$leads = new BancoDeDados();
$leads->columnInsert = "tarefa, data_marcada, descricao";
$leads->valuesInsert = "'{$tarefa}', '{$data}', '{$descricao}'";
$resultado = $leads->insert();

if ($resultado){ ?>
    <p class="text-success">A tarefa '<?= $tarefa;?>' com a data marcada para <?= $data;?>, foi adicionada com  sucesso!!</p>
<?php } else{
    $msg = mysqli_error($leads->conexao());
    ?>
    <p class="text-danger"><b>A tarefa <?= $tarefa;?> não foi adicionada:</b><?= $msg; ?> </p>
<?php }
include('rodape.php')
?>

