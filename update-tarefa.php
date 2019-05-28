<?php
include('cabecalho.php');
$id = $_GET['id'];
$tarefa = $_GET['tarefa'];
$data = $_GET['data'];
$descricao = $_GET['descricao'];

$leads = new BancoDeDados();
$leads->where = 'id = '.$id;
$leads->setUpdate = "tarefa = '$tarefa', data_marcada = '$data', descricao = '$descricao'";
$resultado = $leads->update();

if ($resultado){ ?>
    <p class="text-success">A Tarefa '<?= $tarefa;?>' com data marcada para <?= $data;?>, foi editada com  sucesso!!</p>
<?php } else{
    $msg = mysqli_error($leads->conexao());
    ?>
    <p class="text-danger"><b>A tarefa '<?= $tarefa;?>' não foi editada: </b><?= $msg; ?> </p>
<?php }
include('rodape.php')
?>
