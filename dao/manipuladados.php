<?php
    include_once("conexao.php");

    class manipuladados extends conexao{
        protected $table, $fields, $dados, $status, $fieldid, $valueld;

        public function setTable($tabela){
            $this->table = $tabela;
        }
        public function setFields($campos){
            $this->fields = $campos;
        }
        public function setDados($valores){
            $this->dados = $valores;
        }
        public function setFieldid($chavep){
            $this->fieldid = $chavep;
        }
        public function setValueId($valorchave){
            $this->valueId = $valorchave;
        }
        public function getStatus(){
            return $this->status;
        }

        public function insert(){
            $this->sql = "INSERT INTO $this->table($this->fields) VALUES ($this->dados)";
            if(self::execSQL($this->sql)){
                $this->status = "Cadastro com Sucesso!!!!";
            }else{
                $this->status = "Erro ao cadastrar".mysql_error();
                //$this->status = "Erro ao cadastrar".mysqli_error();
            }
        }

        public function update(){
            $this->sql = "UPDATE $this->table SET $this->fields WHERE $this->fieldId = '$this->valueId'";
            
            if(self::execSQL($this->sql)){
                $this->status = "Alterado com Sucesso!!!!";
            }
            else{
                $this->status = "Erro ao alterar na tabela ".$this->table. + " ".mysql_error();
            }
        }

        public function delete(){
            $this->sql = "DELETE FROM $this->table WHERE $this->fieldId = '$this->valueId'";
            
            if(self::execSQL($this->sql)){
                $this->status = "Deletado com Sucesso!!!!";
            }
            else{
                $this->status = "Erro ao deletar na tabela ".$this->table. + " ".mysql_error();
            }
        }
        
        public function getAllDataTable(){
            $this->sql = "SELECT * FROM $this->table";
            $this->qr = self::execSQL($this->sql);
            #return $this->qr;
            $listaresp = array();

            //while($row = @mysqli_fetch_assoc($this->qr)){
            while($row = self::listQr($this->qr)){
                array_push($listaresp, $row);
            }
            return $listaresp;
        }
        
        public function getLastId(){
            $this->sql = "SELECT $this->fieldId FROM $this->table ORDER BY $this->fieldId LIMIT 1";
            $this->qr = self::execSQL($this->sql);
            $this->data = self::listQr($this->qr);
            return $this->data["$this->fieldId"];
        }

        public function getDadosDuplicados($valorPesquisado){
            $this->sql = "SELECT $this->fieldId FROM $this->table WHERE $this->fieldId = '$valorPesquisado'";
            $this->qr = self::execSQL($this->sql);
            return self::countData($this->qr);
        }

        public function getTotalData(){
            $this->sql = "SELECT $this->fieldId FROM $this->table ORDER BY $this->fieldId";
            $this->qr = self::execSQL($this->sql);
            return self::countData($this->qr);
        }
        
        public function validarLogin($login, $senha){
            $this->sql = "SELECT * FROM $this->table WHERE nome='$login' and senha='$senha'";
            $this->qr = self::execSQL($this->sql);
            $linhas = @mysqli_num_rows($this->qr);
            return $linhas;
            
        }
        function converte($Strings)
        {
            return iconv("UTF-8", "ISO8859-1", $Strings);
        }
    }
?>