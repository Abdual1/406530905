<html>
<head>
    <meta charset="UTF-8">
    <title>upload picture</title>
</head>
<body>
   <form action="#" method="post" enctype="multipart/form-data">
      height:<input type="text" name="height">m <br>
      weight: <input type="test" name="weight">kg <br>
      <input type="file" name="file"><br/>
      <input type="submit" name="submit" value="上傳檔案">
   </form>
</body>
</html>

<?php
extract($_POST);
if(empty($height)||empty($weight)){
    echo" Please type in all information";
}else{
    if(!$_FILES["file"]["name"]){
            echo"empty";
        }
    else{
        echo "height=$height<br>";
        echo "weight=$weight<br>";
        echo "BMI=".$weight/$height/$height."<br>";
        $filename=$_FILES["file"]["name"];
        move_uploaded_file($_FILES["file"]["tmp_name"],"upload/$filename");

        $sub=substr($_FILES["file"]["type"],0,5);
        if($sub=="image"){            
            echo '<img src="upload/'.$filename.'"/>';
        }else{
           echo"wrong type";
        }     
    }
        

}


   
?>