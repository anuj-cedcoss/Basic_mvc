<?php 
   require_once 'models/models.php';
class Controller 
{
    public $model;
    public function __construct()
       {
           $this->models= new Model();

       }

    public function call()
    {
        $result= $this->models->login();
        if ($result=="login") {
               include "views/output.php";

        }
        else {
               include "views/view.php";
           }
       }
   }
?>