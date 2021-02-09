<?php


class bdWorker
{
    public $script;
    public $tablename;
    public $pdo;

    public $dbname = "englandapp";
    private $login = "root";
    public $pass = "root";

    public function dbConnect()
    {
        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=$this->dbname", "$this->login", "$this->pass");

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

 /*   function __construct($word="", $tablename)
    {
        $this->script=$word;
    }*/

    public function exScript()
    {
        $this->dbConnect();
        try {
            $worker = $this->pdo->prepare($this->script);
            $worker->execute();
            $data = $worker->fetchAll();
            return $data;

        }
        catch (Exception $e) {

            return $e->getMessage();

        }

    }
    public function exScript2($script)
    {
        $this->dbConnect();
        try {
            $worker = $this->pdo->prepare($script);
            $worker->execute();
            $data = $worker->fetchAll();
            return $data;

        }
        catch (Exception $e) {

            return $e->getMessage();

        }

    }
}


?>