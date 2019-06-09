<?php
include('cabecalho.php');
require('Classe.php');

$id = $_GET['id'];
$leads = new BancoDeDados();
$leads->where = "id = ".$id;
$resultado = $leads->deleta();

if ($resultado){ ?>
    <p class="text-success">A Tarefa com ID <?= $id?>, foi deletada com  sucesso!!</p>
<?php } else{
    $msg = mysqli_error($leads->conexao());
    ?>
    <p class="text-danger"><b>A tarefa com ID <?= $id?>' não foi deletada: </b><?= $msg; ?> </p>
<?php }
include('rodape.php')
?>
