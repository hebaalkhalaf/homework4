<?php
$connect = mysqli_connect('localhost','root','','newdb');
$query= "select * from posts";
$data=mysqli_query($connect,$query);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show posts page</title>
    <link rel="stylesheet" href="show.css">
</head>
<body>
    <h1>show all your posts :</h1>
<div class="container">
    <div class="posts-container">

        <div class="img-container">
          <img src="imgs/sofas-03.jpg" >
        </div>
        <div class="post-content">hi how are you what are you doing right now ...are you thinking about something what is it..</div>
        </div>
    <div class="posts-container">
      <div class="img-container">
        <img src="imgs/sofas-03.jpg" >
      </div>
      <div class="post-content">hi how are you what are you doing right now ...are you thinking about something what is it..</div>
    </div>
    <?php
     while($post=mysqli_fetch_array($data)){
               
        echo "
        <div class='posts-container'> 
        <div  class='post-content'>".$post['content']."</div>

        </div>
        ";
    }
    ?>

</div>
  
</body>
</html>