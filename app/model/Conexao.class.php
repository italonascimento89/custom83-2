<?php

class ConexaoDb {

  private static $SQL = "mysql:host=localhost;dbname=custom83";
  private static $USER = "root";
  private static $PWD = "32253266";
  private $transactionCount = 0;
  private $INSTANCE_CONEXAO = null;

  public function __construct() { }

//PADRÃO SINGLETON PARA INSTACIA UNICA DA CLASS
  public static function getInstanceConexao() {
        if (empty($INSTANCE_CONEXAO)) {
            try{
              $INSTANCE_CONEXAO = new PDO(self::$SQL, self::$USER, self::$PWD);
              $INSTANCE_CONEXAO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOexception $e) {
               echo $e->getmessage();
            }
        }
        return $INSTANCE_CONEXAO;
  }

  public function beginTransaction() {
        $INSTANCE_CONEXAO->setAttribute(PDO::ATTR_AUTOCOMMIT, false);
        if (!$this->transactionCounter++) {
            return $INSTANCE_CONEXAO->beginTransaction();
        }
        $this->exec('SAVEPOINT trans'.$this->transactionCounter);
        return $this->transactionCounter >= 0;
  }

  public function commit() {
        if (!--$this->transactionCounter) {
            return $INSTANCE_CONEXAO->commit();
        }
        return $this->transactionCounter >= 0;
  }

  public function rollback() {
        if (--$this->transactionCounter) {
            $this->exec('ROLLBACK TO trans'.$this->transactionCounter + 1);
            return true;
        }
        return $INSTANCE_CONEXAO->rollback();
  }
}
