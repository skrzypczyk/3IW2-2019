<?php
class DB
{
    private $table;
    private $pdo;

    //SINGLETON
    public function __construct()
    {
        try {
            $this->pdo = new PDO(DRIVER_DB.":host=".HOST_DB.";dbname=".NAME_DB, USER_DB, PWD_DB);
        } catch (Exception $e) {
            die("Erreur SQL : ".$e->getMessage());
        }

        //A completer
        $this->table = PREFIXE_DB.get_called_class();
    }


    public function save()
    {
        $objectVars = get_object_vars($this);
        $classVars = get_class_vars(get_class());
        $columsData = array_diff_key($objectVars, $classVars);
        $colums = array_keys($columsData);

        if (!is_numeric($this->id)) {
            //INSERT
            $sql = "INSERT INTO ".$this->table." (".implode(",", $colums).") VALUES (:".implode(",:", $colums).");";
        } else {
            //UPDATE
            foreach ($colums as $colum) {
                $sqlUpdate[] =  $colum."=:".$colum;
            }
            $sql = "UPDATE ".$this->table." SET ".implode(",", $sqlUpdate)." WHERE id=:id;";
        }

        $queryPrepared = $this->pdo->prepare($sql);
        $queryPrepared->execute($columsData);
    }
}
