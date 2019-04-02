<?php include('cabecalho.php');?>
    <div style=" text-align: center;">
        <h1>Adicionar Tarefa</h1>
        <form action="adiciona-tarefa.php">
            <table class="table">
                <tr>
                    <td>Tarefa:</td>
                    <td><input class="form-control" type="text" name="registro"></td>
                </tr>
                <tr>
                    <td>Data:</td>
                    <td><input  type="date" name="data_marcada"></td>
                </tr>
                <tr>
                    <td>Descrição:</td>
                    <td><input class="form-control" type="text" name="descricao"></td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-primary" type="submit" value="cadastra"> Cadastrar</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
<?php include('rodape.php'); ?>