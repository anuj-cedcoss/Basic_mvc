<?php 
class Model {
    public function login()
    {
        if(isset($_REQUEST['username'])&&isset($_REQUEST['password']))
        {
            if($_REQUEST['username']=="anuj" && $_REQUEST['password']=="password")
            {
                return "login";

            }
            else
            {
                return "invalid user";
            
            }


        }
    }
}
?>
