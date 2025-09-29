<?php
include 'config.php';


                 $url = $_GET['id'];

               
               
                echo $url;
                    $updateSql = "DELETE FROM `comments` WHERE id = $url";
                    $updateResult = mysqli_query($conn,$updateSql) or die("update fail");
                    header('Location: showComment.php?isDeleted=1');
            
             
             ?>