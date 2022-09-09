<?php

namespace App\Controllers;


use App\Core\View;
use App\Models\Coders;


class CodersController{

    public function __construct(){

        if(isset($_GET["action"]) && ($_GET["action"] == "delete")){
            $this->delete($_GET["id"]);
            return;
        }
        if(isset($_GET["action"]) && ($_GET["action"] == "create")){
            $this->create();
            return;
        }
        if(isset($_GET["action"]) && ($_GET["action"] == "store")){
            $this->store($_POST);
            return;
        }
        if(isset($_GET["action"]) && ($_GET["action"] == "edit")){
            $this->edit($_GET["id"]);
            return;
        }  
        if(isset($_GET["action"]) && ($_GET["action"] == "update")){
            $this->update($_POST, $_GET["id"]);
            return;
        }

        $this->index();
    }
    
    public function index(){
        $coder = new Coders;

        $coders = $coder->all();
        new View("coderList", ["coder" => $coders]);
    }
    
    public function delete($id){
        $coderHelper = new Coders();
        $coder = $coderHelper->findById($id);
        $coder->destroy();

        $this->index();
    }

    public function create(){
        new View("createCoder");
    }

    public function store(array $request){
        $newCoder = new Coders(null,$request["newcoder"],$request["issue"]);

        $newCoder->save();

        $this->index();
    }

    public function edit($id){
        $coderHelper = new Coders();
        $coder = $coderHelper->findById($id);

        new View("editCoder",["coder" => $coder]);

    }
    public function update(array $request, $id){

        $coderHelper = new Coders();
        $coder = $coderHelper->findById($id);

        $coder->rename($request["coder"],$request["issue"]);

        $coder->update();
        $this->index();

    }
    
}
