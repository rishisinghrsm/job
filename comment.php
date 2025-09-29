<?php
include "config.php";
if(isset($_POST['submit'])){
mysqli_real_escape_string($conn,$_POST['comment']);
    $comment = $_POST['comment'];
    $id = $_POST['id'];
    // $add = $_POST['addFirstCategory'];

    $addSql = "INSERT INTO comments (comment) values('{$comment}')";
    // echo $addSql;
    $addresult = mysqli_query($conn,$addSql) or die('add firstCategory query fail');
     header("Location:detail.php.php?d=$id&added=1");
}else{
    echo "error in add firstCategory";
}
?>