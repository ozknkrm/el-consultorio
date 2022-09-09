<?php

namespace App\Models;

use App\Database;

class Coders{

    private ?int $id;
    private string $coder;
    private string $issue;
    private ?string $date_time;

    private $database;
    private $table = "appointments";

    public function __construct(int $id = null, string $coder ="", string $issue = "", string $date_time = null){

        $this->id = $id;
        $this->coder = $coder;
        $this->issue = $issue;
        $this->date_time = $date_time;


        if(!$this->database){
            $this->database = new Database();
        }
    
    }

    public function all(){
        $query = $this->database->mysql->query("select * FROM {$this->table}");
        $coderArray = $query->fetchAll();

        $coderList = [];

        foreach ($coderArray as $coder){
            $coderItem = new Coders($coder["id"],$coder["coder"],$coder["issue"],$coder["date_time"]);

            array_push($coderList, $coderItem);
        }

        return $coderList;
    }

    public function getID(){
        return $this->id;
    }

    public function getCoder(){
        return $this->coder;
    }

    public function getIssue(){
        return $this->issue;
    }

    public function getDate_time(){
        return $this->date_time;
    }

    public function findById($id){
        $query = $this->database->mysql->query("SELECT * FROM `{$this->table}` WHERE `id` = {$id}");
        $result = $query->fetchAll();
        
        return new Coders($result[0]['id'], $result[0]['coder'], $result[0]['issue'], $result[0]['date_time']);
    }

    public function destroy(){
        $query = $this->database->mysql->query("DELETE FROM `{$this->table}` WHERE `{$this->table}`.`id` ={$this->id}");
    }

    public function save(){
        $query = $this->database->mysql->query("INSERT INTO `{$this->table}` (`coder`,`issue`) VALUES('$this->coder','$this->issue');"); 
    }

    public function rename($coder,$issue){
        $this->coder = $coder;
        $this->issue = $issue;
    }

    public function update(){
        $this->database->mysql->query("UPDATE `{$this->table}` SET `coder` = '{$this->coder}', `issue` = '{$this->issue}' WHERE `ID` = {$this->id}");
    }
}