<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();
//http://hostname/api/

$app->get('/', function() use ( $app ) {
    echo "Welcome to Task REST API";
});

$app->get('/tasks', function() use ( $app ) {
    $tasks = getTasks();
    echo json_encode($tasks);
});

//TODO move it to a DAO class

function getTasks() {
    $tasks = array (
        array('id'=>1,'description'=>'Learn REST','done'=>false),
        array('id'=>2,'description'=>'Learn JavaScript','done'=>false)
    );
    return $tasks;
}
$app->run();
?>