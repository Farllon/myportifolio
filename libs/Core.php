<?php
function home(){
    require_once("./controllers/HomeController.php");
    HomeController::index();
}

function projects(){
    require_once("./controllers/ProjectsController.php");
    ProjectsController::index();
}
?>