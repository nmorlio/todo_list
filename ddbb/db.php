<?php

session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'todo_list'
);

/*if (isset($conn)){

    echo 'DB is connected';
}*/

?>