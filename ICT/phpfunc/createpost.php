<?

require('connect.php');


$title    = $_POST['title'];
$descritoion = $_POST['descritoion'];
$date1 = date("d.m.y");

$query = "INSERT INTO `news` (`id`, `title`, `descritoion`, `comments`, `date`) 
    VALUES (NULL, '$title', '$descritoion', NULL, '$date1');";
if ($con->query($query) === TRUE) { // оператор if-else
    echo "Successfully ordered"; // вывод текста на страницу
} else { // оператор if-else
    echo "Error: <br>" . $con->error; // вывод текста на страницу
}
header('Location: ../');
?>