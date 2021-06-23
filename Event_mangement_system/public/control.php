<?php
include '../app/view/ViewEvent.php';
include '../app/controller/EventsController.php';
include '../app/model/Events.php';
$model = new Events();
$controller = new EventsController($model);


$view = new EventView($controller, $model);
echo $view->output();
$controller->insert();
?>