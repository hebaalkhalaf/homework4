<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="userinterface">
   <div class="container">
   
   <form action="" method="GET">
        <input class="input" type="text" name="userName" placeholder="write your name please..">
        <input class="input" type="email" name="emil" placeholder="write your email please..">
        <input class="input" type="password" name="password" placeholder="write your password please..">
         <h3>choose your gender:</h3>
          <div class="radio">
          <input type="radio" name="gender" id="female">
           <label for="female">female</label>
          </div>
        
         <div class="radio">
            <input type="radio" name="gender" id="male">
            <label for="male">male</label>
            </div>
        <input class="input" type="date" name="age" placeholder="write your age please..">
        <input type="submit" value="register" name="register">
        <input type="submit" value="add comment" name="comment">
     </form>
     <div class="image">
      <img src="imgs/team7.png" alt="">
     </div>
    </div>
   </div>
   <?php
    $username= @$_GET['userName'];
    $email= @$_GET['emil'];
    $password= @$_GET['password'];
    $gender= @$_GET['gender'];
    $age= @$_GET['age'];
    $connect = mysqli_connect('localhost','root','','newdb');
    if(isset($_GET['register'])){
        if($connect){
            mysqli_query($connect,"insert into user(username,email,password,gender,age)values('$username',
            '$email','$password',
            '$gender','$age')");
            header('Location:addpost.php');
        }else{
            echo"the connection is failed";
        }

    }
    if(isset($_GET['comment'])){
        header('Location:addcomment.php');
    }
   ?>
</body>
</html>
