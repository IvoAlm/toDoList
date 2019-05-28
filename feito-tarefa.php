<?php
include('cabecalho.php');
$id = $_GET['id'];

$leads = new BancoDeDados();
$leads->where = 'id = '.$id;
$leads->setUpdate = "atividade_feita = 'Sim', data_feita = NOW()";
$resultado = $leads->update();

if ($resultado){ ?>
    <p class="text-success">A Tarefa com ID <?= $id?>, foi feita com  sucesso!!</p>
<?php } else{
    $msg = mysqli_error($leads->conexao());
    ?>
    <p class="text-danger"><b>A tarefa com ID <?= $id?>' não foi feita: </b><?= $msg; ?> </p> </p>
<?php }
include('rodape.php')
?>
