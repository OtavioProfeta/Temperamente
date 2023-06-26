<?php
ini_set('display_errors', '0');
error_reporting(0);

include_once("conexao.php");

class manipuladados extends conexao
{

    protected $sql, $qr, $table, $fields, $dados, $status, $fieldId, $valueId;

    public function setTable($t)
    {
        $this->table = $t;
    }

    public function setFields($f)
    {
        $this->fields = $f;
    }
    public function setFieldId($fid)
    {
        $this->fieldId = $fid;
    }
    public function setvalueId($vid)
    {
        $this->valueId = $vid;
    }
    public function setDados($d)
    {
        $this->dados = $d;
    }
    public function getStatus()
    {
        return $this->status;
    }

    public function insert()
    {
        $this->sql = "INSERT INTO $this->table($this->fields) VALUES($this->dados)";
        if (self::execSQL($this->sql)) {
            $this->status = "Enviado com sucesso!";
        } else {
            $this->status = "ERRO ao enviar!" . mysqli_error();
        }
    }
    public function update()
    {
        $this->sql = "UPDATE $this->table SET $this->fields WHERE $this->fieldId = '$this->valueId'";
        if (self::execSQL($this->sql)) {
            $this->status = "Alterado com sucesso!" . $this->sql;
        } else {
            $this->status = "ERRO ao elterar tabela!" . $this->table . " " . mysqli_error();
        }
    }
    public function delete()
    {
        $this->sql = "DELETE FROM $this->table WHERE $this->fieldId = $this->valueId";
        if (self::execSQL($this->sql)) {
            $this->status = "Apagado com sucesso!";
        } else {
            $this->status = "ERRO ao apagar tabela!" . $this->table . " " . mysqli_error();
        }
    }
    public function getAllDataTable() {
        $this->sql = "SELECT * FROM $this->table ORDER BY RAND()";
        $this->qr = self::execSQL($this->sql);
    
        $results = array();
        while ($row = $this->qr->fetch_assoc()) {
            $results[] = $row;
        }
        return $results;
    }
    public function validarlogin($login, $password){
        $this->sql ="SELECT * FROM tb_usuario WHERE nome='$login' and senha='$password'";
        $this->query = self::execSQL($this->sql);
        $linhas = @mysqli_num_rows($this->query);
        return $linhas; /*RETORNA VALOR 1 PARA ENCONTRADO E 0 PARA NÃO*/ 
    }
    
}
