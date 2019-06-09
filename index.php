<?php
include('cabecalho.php');
require('Classe.php');
$leads = new BancoDeDados();
$lista = mysqli_fetch_all($leads->select());
?>


        <h1>Seja bem vindo!!</h1>

    <table class="table table-striped table-bordered">
        <td>
            <th>Tarefa</th>
            <th>Descrição</th>
            <th>Data Marcada</th>
            <th>Ações</th>
            <th></th>

        </td>
        <?php
        foreach ($lista as $produto):
            if(!$produto[5]):?>

            <tr>
                <td><?=$produto[0]?>.</td>
                <td><?= $produto[1] ?></td>
                <td><?= $produto[3] ?></td>
                <td><?= $produto[2] ?></td>
                <td><a href="editar-tarefa.php?id=<?=$produto[0]?>">Editar</a><br>
                    <a href="deletar-tarefa.php?id=<?=$produto[0]?>">Excluir</a> <a></td>
                <th><a href="feito-tarefa.php?id=<?=$produto[0]?>">Feito</a></th>
            </tr>

        <?php endif; endforeach;?>
    </table>
    <table class="table table-striped table-bordered">
        <td>
            <th>Tarefa Feita</th>
            <th>Data</th>
        </td>
        <?php
        foreach ($lista as $produto):
            if($produto[5]):?>
            <tr>
                <td><?=$produto[0]?>.</td>
                <td><?= $produto[1]?></td>
                <td><?= $produto[5]?></td>
            </tr>
            <?php endif;
            endforeach;?>
    </table>


<?php include('rodape.php'); ?>