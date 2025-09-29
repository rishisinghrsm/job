<?php include 'header.php' ?>


<div class="container-fluid  p-3">
    <div class="row d-flex justify-content-center">
        <div class="col-md-7 p-3 overflow-auto  bg-white ">
            <?php
            $url = $_GET['d'];
            $sql1 = "SELECT * FROM `notification` where sNo = $url";
            $result1 = mysqli_query($conn, $sql1) or die("Query failed in img");
            while ($row1 = mysqli_fetch_assoc($result1)) {
                $titel =  $row1['title'];
            ?>

            <div class="container-fluid show_on_mobile">

                <div class="row  mb-4 p-2">
                    <div class="col-12 d-flex justify-content-center align-items-center text-center">
                        <p class="m-0 me-5 text-center">Share : </p>
                    <a target="_blank" href="https://api.whatsapp.com/send?text=<?php echo "https://bharatjobfinder.com" . $meta_url; ?> " data-action="share/whatsapp/share"><i class="bi bi-whatsapp text-success fs-1"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a target="_blank" href="https://facebook.com/sharer/sharer.php?u=<?php echo "https://bharatjobfinder.com" . $meta_url . "&d=" . $url ?> " class="fb-xbml-parse-ignore" data-action="share/whatsapp/share"><i class="bi bi-facebook text-primary fs-1"></i></a>
                    </div>
                </div>


                <div class="row d-flex justify-content-center align-self-center p-1">
                    <div class="col-4 text-center">                    <img src="<?php echo $row1['img']; ?>" alt="<?php echo $row1['img']; ?>" width="70px" height="200px">
</div>


                    <div class="col-4 text-center border-start border-1">  <?php
                    $currentDateTime = new DateTime('now');
                    $currentDate = $currentDateTime->format('d-m-Y');
                    // echo $currentDate;  
                    $p = $currentDate;
                    $l = $row1['lastDate'];
                    $date1 = date("d-m-Y H:i:s", strtotime($p));

                    $date2 = date("d-m-Y H:i:s", strtotime($l));

                    $diff = (strtotime($date2) - strtotime($date1));

                    $date =  floor($diff / 86400);
                    if ($date <= 0) {

                        echo "  <p class='text-center mb-0'>Days Left <br> <i style='font-size:30px' class='bi bi-x-circle-fill text-danger '></i></p> ";
                    } else {
                        echo " <p class='text-center mb-0  '>Days Left <br> <span style='color:green;' class='fs-3'>" . $date + 1 . "</span></p>";
                    } ?></div>
                    <div class="col-4 text-center border-start border-1"> 
                        <p class="m-0">Total Vaccancy</p>
                    <p class="m-0 fs-3 text-success"><?php echo $row1['vacancy']; ?></p>
                </div>
                </div>
            </div>
            <br>
                <div class="d-flex fs-4 justify-content-between align-items-center ">
                    <div class="text-success">Post Date - <?php echo date("d-m-Y ", strtotime($row1['postDate'])); ?></div>
                    <div class="text-danger">Last Date - <?php echo date("d-m-Y h:m A", strtotime($row1['lastDate'])); ?></div>
                    <!-- <div>Total No. Of Vaccancy - 1200</div> -->
                </div>

                <h2><strong><?php echo $row1['title'] ?></strong></h2>
                <p><?php echo $row1['detail'] ?></p>

                <p>
                <blockquote style="padding:20px;background-color:#ffff80;"><span style="color:red;font-weight:600">DISCLAIMER :</span> <a href='https://bharatjobfinder.com'>Bharat Job Finder</a> is a platform for job listings and information. While we make every effort to provide reliable and up-to-date content, we cannot guarantee the accuracy, completeness, or suitability of the job listings or information posted here. Users are advised to verify the details independently and exercise their own judgment when pursuing job opportunities or making career-related decisions based on the information found on this website. We are not responsible for any consequences resulting from the use of this website."</blockquote>
                </p>



              


                <div class="container">
    <form method="post" action="comment.php">
      <div class="form-group">
        <textarea class="form-control status-box w-100" rows="3" name="comment" placeholder="Enter your comment here..." required></textarea>
        <input type="hidden" name="id" value="<?php echo $url ?>">

      </div>
      <div class="button-group pull-right">
         
          <input type="submit" value="Send" name="submit" class="btn btn-primary">
        </form>
      
    </div>


</div>
<br>




        </div>

        <div class="col-md-2 p-4 ms-2 bg-white border media_hide_on_mobile">
            <div class="sticky-top pt-3">
                <div class="socal p-0 text-center">

                    <h4>SHARE THIS PAGE</h4>
                    <!--<?php echo $meta_url; ?>-->
                    <a target="_blank" href="https://api.whatsapp.com/send?text=<?php echo "https://bharatjobfinder.com" . $meta_url; ?> " data-action="share/whatsapp/share"><i class="bi bi-whatsapp text-success fs-1"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a target="_blank" href="https://facebook.com/sharer/sharer.php?u=<?php echo "https://bharatjobfinder.com" . $meta_url . "&d=" . $url ?> " class="fb-xbml-parse-ignore" data-action="share/whatsapp/share"><i class="bi bi-facebook text-primary fs-1"></i></a>

                </div>
                <div class="d mt-5">
                    <img src="<?php echo $row1['img']; ?>" alt="<?php echo $row1['img']; ?>" width="100%" height="200px">
                </div>

                <div class="mt-5 border-top fs-2">
                    <?php
                    $currentDateTime = new DateTime('now');
                    $currentDate = $currentDateTime->format('d-m-Y');
                    // echo $currentDate;  
                    $p = $currentDate;
                    $l = $row1['lastDate'];
                    $date1 = date("d-m-Y H:i:s", strtotime($p));

                    $date2 = date("d-m-Y H:i:s", strtotime($l));

                    $diff = (strtotime($date2) - strtotime($date1));

                    $date =  floor($diff / 86400);
                    if ($date <= 0) {

                        echo "  <p class='text-center mb-0'>Days Left <br> <i style='font-size:90px' class='bi bi-x-circle-fill text-danger '></i></p> ";
                    } else {
                        echo " <p class='text-center mb-0'>Days Left <br> <span style='color:green;font-size:90px'>" . $date + 1 . "</span></p>";
                    } ?>
                </div>
                <div class="text-center border-top mt-3 pt-2">
                    <h3>Total Vaccancy</h3>
                    <h1><?php echo $row1['vacancy']; ?></h1>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-2"></div> -->
    <?php } ?>
    </div>
</div>




<br><br>
<br>
<?php include 'footer.php' ?>