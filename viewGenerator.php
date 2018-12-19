<?php
     /*  @author         Sourav Prasad
      *  @Description    page for generating the views
     */
if(isset($_GET['page'])){
    $page = $_GET['page'];
    if(file_exists("views/".$page.".php")){
        require_once("views/".$page.".php");
    }
    else{
        require_once("views/404.php");
    }
}
else{
    require_once("views/home.php");
}
?>