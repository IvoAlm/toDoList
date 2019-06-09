<?php


class BancoDeDados{

    var $host = "localhost";
    var $user = "root";
    var $password = "";
    var $dataBase = "ToDoList";
    var $db = "todolist";
    var $table = "atividades";
    var $dbTable = "todolist.atividades";
    var $columnSelect = "*";
    var $where = "id is not null";
    var $setUpdate = "tarefa = '', data_marcada = '00/00/0000', descricao = ''";
    var $columnInsert = 'tarefa, data_marcada, descricao';
    var $valuesInsert = "'insert na tarefa', '17/06/1993', 'insert na descrição'";


    function __contruct($host = null, $user = null, $password = null, $dataBase = null){
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->dataBase = $dataBase;
    }

    function conexao(){

        return mysqli_connect($this->host, $this->user, $this->password, $this->dataBase);
    }

   function deleta(){

       $query = "DELETE FROM $this->dbTable WHERE $this->where";

       $resultado = mysqli_query($this->conexao(), $query);

       return $resultado;

   }

   function update(){
       $query = "UPDATE $this->dbTable SET $this->setUpdate WHERE $this->where";
       $resultado = mysqli_query($this->conexao(), $query);

      return $resultado;

   }

   function select(){

      $query = "SELECT $this->columnSelect FROM $this->dbTable WHERE $this->where";

      $resultado = mysqli_query($this->conexao(), $query);

      return $resultado;
   }

   function insert(){
       $query = "Insert into $this->table ( $this->columnInsert ) values ( $this->valuesInsert )";

       $resultado = mysqli_query($this->conexao(), $query);

       return $resultado;
   }
}
;





