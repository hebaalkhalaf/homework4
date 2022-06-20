<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comment page</title>
</head>
<style>
    h1{
        padding: 20px;
    color: #e6c274;
    font-size: 40px;
    font-weight:bold ;
    text-transform: capitalize;
    }
    form{
        background-color:rgb(0,0,0,0.8);
        height:450px;
        display:flex;
        justify-content:center;
    }
    input{
        display:block;
        width:600px;
        height:300px;
        margin:auto;
        border:none;
        background-color:#eee;
        padding:20px;
        text-align:center;
        outline:none;
        border-radius:6px;
        font-size:20px;
        color: #e6c274;
    }
    input::placeholder{
        font-size:20px;
        text-transform:capitalize;
    }
     .go{
        display:block;
        width:100px;
        height:100px;
        border-radius:50%;
        background-color:#e6c274;
        color:rgb(0,0,0,0.6);
        font-size:28px;
        cursor: pointer;
    
     }
    </style>
<body>
    <h1>thanks to you to see our posts..</h1>
    <form action="" method="GET">
        <input type="text" name="comment" placeholder="write your comment here...">
        <input class="go" type="submit" name="go" value="GO">
    </form>
    <?php
    $comment=@$_GET['comment'];
    $connect = mysqli_connect('localhost','root','','newdb');
    if(isset($_GET['go'])){
        if($connect){
            mysqli_query($connect,"insert into comments(comment)values('$comment')");
        }else{
            echo"the connection is failed";
        }
    }
    ?>

</body>
</html>