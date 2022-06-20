<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add post page</title>
    <link rel="stylesheet" href="post.css">
</head>

<body>
<form method="GET"  class="post-section">
            <div class="image-upload-container">
                <input type="file" id="upload-img" accept="image/png, image/jpeg" hidden>
                <label for="upload-img" class="upload-overlay">upload image</label>
                <img class="post-img" src="" name="imgsrc">
            </div>
            <div class="post-detail">
                   <input type="text" class="des" contenteditable="true" name="content"
                   placeholder="write a short description here...">
       
                   
                
                 <div class="btn-container">
                    <input type="submit" class="post-btn add-btn" name="add" value="add to posts">
                    <input type="submit"  class="post-btn show-btn" name="show" value="show all posts">
                 </div>
            </div>
          

        
</form>
<?php 
   $imgsrc=@$_GET['imgsrc'];
   $content=@$_GET['content'];

   $connect = mysqli_connect('localhost','root','','newdb');
   
   if(isset($_GET['add'])){
    if($connect){
     mysqli_query($connect,"insert into posts (content,image)values('$content','$imgsrc')"); 
        
    }else{
        echo"the connection is failed";
    }
 }
 if(isset($_GET['show'])){
    header('Location:showposts.php');
 }
?>

</body>
</html>