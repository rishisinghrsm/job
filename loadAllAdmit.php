
<?php include 'config.php';
include 'header.php' ?>

<!-- for search -->
<br>


<div class="container-fluid mt-2 ">
    <div class="row">
        <div class="col-8 m-auto mb-1">
          
        </div>
        <div class="col-md-9 m-auto">
            <div class="card " style="border: 4px solid green;">
                <div class="card-header  sticky-md-top  green ">
                    <ul class="nav nav-tabs   card-header-tabs fw-bolder">
                        <li class="nav-item ">
                            <a class="nav-link white " aria-current="true" href="allNotification.php"  >LATEST NOTIFICATION
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link white active" href="loadAllAdmit.php" >ADMIT CARD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link white" href="loadAllResult.php" >RESULT</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body  mt-0 p-0">

                    <div class="container  ">
                        <?php
                        $num = 1;
                        $sql1 = "SELECT * FROM `notification` WHERE status = 1 AND admit = 1 ORDER BY updateDate AND postDate DESC  ";
                        $result1 = mysqli_query($conn, $sql1) or die("Query failed in img");
                        while ($row1 = mysqli_fetch_assoc($result1)) {

                        ?>
                            <div class="row  shadow rounded-2 p-2  mb-1 " style="min-height: 80px;">
                                <!-- ------------------------col 1----------------- -->
                                <div class=" col-md-1   d-flex align-items-center">
                                    <img class="media" src="<?php echo $row1['img']; ?>" alt="Image Here">
                                </div>
                                <!-- ------------------------col 2----------------- -->
                                <div class=" col-md-8 p-1 ">

                                    <!-- title -->
                                    <div class="  mb-1" style="font-size:17px"><a class="text-dark" style="font-family: 'Gabarito', sans-serif;" href="detail.php?d=<?php echo $row1['sNo']; ?>&<?php echo str_replace(" ", "-", $row1['title']); ?>" target="_blank"><?php echo substr($row1['title'], 0, 85) . "...."; ?></a></div>




                                    <!-- category -->
                                    <div class="row d-flex  justify-content-between align-items-center fw-bold text-uppercase" style="font-family: 'Kanit', sans-serif;">
                                        <div class="col-md-5 ">
                                            <?php
                                            $sql2 = "SELECT * FROM `firstCategory` WHERE id =  {$row1['catId']}";
                                            $result2 = mysqli_query($conn, $sql2) or die("Query failed in img");
                                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                            ?>
                                                <span class="" style="font-size: 14px;padding: 0px 5px 0px 0px;"><a class="grayText" href="mainCategory.php?main=<?php echo $row2['id']; ?>"> <?php echo $row2['firstCategory']; ?> </a></span>
                                            <?php }; ?>


                                            <!-- third category -->
                                            <?php
                                            $sql2 = "SELECT * FROM `category` WHERE catSNo =  {$row1['catId3']}";
                                            $result2 = mysqli_query($conn, $sql2) or die("Query failed in img");
                                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                            ?>
                                                <span class="grayText" style="font-size: 14px;padding: 0px 5px 0px 5px;"> <i class="bi bi-chevron-right"></i>&nbsp; <a class="grayText" href="category.php?cat=<?php echo $row2['catSNo']; ?>"> <?php echo $row2['category']; ?></a></span>
                                            <?php

                                            }; ?>
                                        </div>
                                    </div>



                                    <!-- post date -->
                                    <div class=" row mt-1 p-0 d-flex align-items-start " style="font-size: 13px;font-family: 'Kanit', sans-serif;">
                                        <div class=" col-md-3 text-start p-1 ps-2 grayText border-end border-black fw-bold text-success"> <span class="grayText"><i class="bi bi-calendar3"></i> &nbsp; Post Date - </span> <?php echo date("d-M-Y", strtotime($row1['postDate'])); ?></div>
                                        <div class=" col-md-4 text-start p-1 m-0 grayText border-end border-black fw-bold text-danger"><span class="grayText"><i class="bi bi-calendar3"></i> &nbsp; Last Date -</span> <?php echo date("d-M-Y h:i  A ", strtotime($row1['lastDate'])); ?></div>
                                        <div class=" col-md-3 text-start p-1 grayText border-end border-black fw-bold  " style="font-size:14px;"><i class="bi bi-people"></i> &nbsp; Total Vacancy - <?php echo $row1['vacancy'] . " "; ?></div>
                                        <!--location  second category -->
                                        <?php
                                        $sql2 = "SELECT * FROM `secondCategory` WHERE id =  {$row1['catId2']}";
                                        $result2 = mysqli_query($conn, $sql2) or die("Query failed in img");
                                         while ($row2 = mysqli_fetch_assoc($result2)) {
                                        ?>
                                            <div class=" col-md-2 text-start p-1 grayText fw-bold text-start d-inline-block text-truncate " style="font-size: 14px;padding: 0px 15px 0px 5px;max-width: 120px;"><i class="bi bi-geo-alt"></i>&nbsp; <a class="grayText" href="stateCategory.php?stateId=<?php echo $row2['id']; ?>"> <?php echo $row2['secondCategory'] . " "; ?> </a> </div>
                                        <?php
                                        } ?>

                                    </div>

                                </div>
                                <!--  ------------------- -->
                                <div class="col-md-3 m-0 p-0">
                                    <div class="container-fluid p-0 m-0">
                                        <div class="row p-0 m-0">
                                            <!--  ------------------- -->

                                            <!-- ------------------------------ total No Left -------------------------------------------- -->
                                            <!-- ------------------------col 2----------------- -->
                                            <div class="col-4  border-start fw-bold p-1 align-self-center" style="font-family: 'Kanit', sans-serif;">
                                                <?php
                                                $currentDateTime = new DateTime('now');
                                                $currentDate = $currentDateTime->format('d-m-Y');
                                                // echo $currentDate;  
                                                $p = $currentDate;
                                                $l = $row1['lastDate'];
                                                $date1 = date("d-m-Y h:i:s", strtotime($p));

                                                $date2 = date("d-m-Y h:i:s", strtotime($l));

                                                $diff = (strtotime($date2) - strtotime($date1));
                                                // $diff1 = (strtotime($date1) - strtotime($date2));
                                                // echo $diff - $diff1 . "<br>";
                                                // echo $diff1;

                                                $date =  floor($diff / 86400);
                                                if ($date <= 0) {
                                                    // $date = 0;
                                                    echo "  <p class='text-center mb-0  '>Days Left <br> <i class='bi bi-x-circle-fill text-danger fs-1'></i></p> ";
                                                } else {
                                                    echo " <p class='text-center mb-0  '>Days Left <br> <span style='color:green;font-size:40px'>" . $date + 1 . "</span></p>";
                                                } ?>
                                            </div>
                                            <div class="col-4  border-start fw-bold p-0 m-0 text-center align-self-center" style="font-family: 'Kanit', sans-serif;">
                                                <p class='text-center mb-0  '>Admit Card <br> <?php if ($row1['admit']) {
                                                                                                    echo "<i class='bi bi-check-circle-fill text-success fs-1'></i>";
                                                                                                } else {
                                                                                                    echo '<i class="bi bi-check-circle-fill grayText fs-1"></i>';
                                                                                                } ?> </p>
                                            </div>
                                            <div class="col-4  border-start fw-bold p-1 align-self-center" style="font-family: 'Kanit', sans-serif;">
                                                <p class='text-center mb-0  '>Result <br> <?php if ($row1['result']) {
                                                                                                echo "<i class='bi bi-check-circle-fill text-success fs-1'></i>";
                                                                                            } else {
                                                                                                echo '<i class="bi bi-check-circle-fill grayText fs-1"></i>';
                                                                                            } ?> </p>
                                            </div>

                                            <!-- ------------ -->
                                        </div>

                                    </div>
                                </div>
                                <!-- ------------ -->

                            </div>
                        <?php  }; ?>

                        </div>

</div>


</div>
</div>
</div>


</div>

</div>


























<?php include 'footer.php' ?>