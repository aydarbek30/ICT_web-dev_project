<?php

    // $cart = $_SESSION['cart'];

    // $id = $_POST['id'];

    require('connect.php'); // Добавление другого файла

$post_id = (int)$_POST['post_id'];
// $id =  (int)$_POST['id'];
$user = $_POST['user'];
$comment = $_POST['comment'];
$date1 = date("d.m.y");

$query = "INSERT INTO `comm` (`id`, `post_id`, `user`, `userComment`, `date`) 
VALUES (NULL,'$post_id', '$user', '$comment', '$date1');";
// "INSERT INTO `comm` (`id`, `post_id`, `user`, `userComment`, `date`) 
//     VALUES (NULL, :id, :content, :comment, '02-05-2022');";

$result = $con->query($query);
// $statement = $con->prepare($query);
// $result = $statement->execute($data);
var_dump($result);

