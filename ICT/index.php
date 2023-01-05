<?php 
session_start(); 
// to make session's work well
require('./phpfunc/connect.php'); // Добавление другого файла

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>News WSP</title>
</head>

<body>
    <div class="all">
        <div class="header">
            <div class="headertitle">
                <div class="title">
                    <h1>
                    KBTU <span class="color"> NEWS </span> 
                    </h1> 
                </div>
            </div>
            <div class="logo">
                <img src="./img/KBTU_logo.png" alt="">
            </div>
            
            <a href="login.php"> Sign in -> </a>   
        </div>

        <div class="mainholder">

            <div class="newsholder">
                <?
                    $query = "SELECT * FROM `news`";
                    $news = $con->query($query);
                    foreach($news as $onenews){
                        echo  '
                            <div class="onenews">
                                <div class="newstitle">
                                    <div class="row">
                                        <h1>'.$onenews[1].'</h1>
                                        <p>'.$onenews[4].'</p>
                                    </div>
                                    <div class="descrip">
                                        <p>'.$onenews[2].'</p>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="newscomm">
                        ';
                        $id = $onenews[0];
                        $query="SELECT * FROM `comm` WHERE `post_id`='$id'";
                        $comments =$con->query($query);
                        foreach($comments as $comm){
                            echo '
                                        <div class="onecomment">
                                            <p>' .$comm[2].'

                                            </p>
                                            <div class="row">
                                                <p> from ' .$comm[3].'</p><p> date :' .$comm[4].'</p>
                                            </div>
                                        </div>      
                    ';
                        }
                        echo ' 
                        </div>
                            <div class="sendcomm">
                                <input type="text" class="name" name="user" placeholder="" id="' .$onenews[0].'">
                                <input type="text" name="comment" placeholder="" id="' .$onenews[0].'">
                                <input type="submit" class="otpravit" placeholder="" id="' .$onenews[0].'" >
                                <input type="hidden"  name="postid" placeholder="' .$onenews[1].'" id="" value="' .$onenews[1].'">
                            </div>
                        </div>
                    ';
                    }
                ?>
               
                
                    

                </div>
            <!-- <div class="" id="products-container"></div> -->
            </div>
        </div>
        </div>

    
        <footer>
            <div class="row">
                <div class="contacts">
                    <p>mail : 123123@ 123 .com </p>
                    <a href=""> link </a>
                    <p>Phone number: 123123123</p>
                </div>
                <div class="reference">
                    <p>all rights bla bla bla </p>
                    <p>asds asdsad asdsad</p>
                </div>
            </div>
        </footer>

    

        <script src="/js/jquery.js"></script>
        <!-- <script src="/js/renderComments.js"></script>
        <script src="/js/post.js"></script> -->
        <script src="/js/commenting.js"></script>

            
        
    </div>
</body>
</html>