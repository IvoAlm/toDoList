<?php include('cabecalho.php');

$id = $_GET["id"];

$leads = new BancoDeDados();
$leads->where = 'id = '.$id;
$lista = mysqli_fetch_all($leads->select());
//tentativa de deixar os valores já escritos

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
include('rodape.php');
;?>
