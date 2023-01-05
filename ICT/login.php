<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?
$inp = file_get_contents('db/Objects.json');
                                            $tempArray = json_decode($inp, JSON_UNESCAPED_UNICODE);
                                            $countArr = count($tempArray);
                                            $countArr++;

                                            $datae = array(
                                                'id'   => "$countArr",
                                                'title' => $_POST['name'],
                                                'price' => $_POST['price'],
                                                'img'  => $_FILES['imgfile']['name'],
                                                'category' => $_POST['category']
                                            );

                                            array_push($tempArray, $datae);
                                            $jsonData = json_encode($tempArray, JSON_UNESCAPED_UNICODE);
                                            file_put_contents('db/Objects.json', $jsonData);
                                            unset($jsonData);

                                            move_uploaded_file($fileTmpName, $fileDestination);
                                            echo 'Успешно добавлен';
                                            ?>


INSERT INTO `comm` (`id`, `post_id`, `user`, `userComment`, `date`) 
VALUES (NULL, '1', 'FirstUser', 'Some Commments', '02-05-2022');
