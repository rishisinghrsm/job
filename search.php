<?php
include "config.php";
$search = mysqli_real_escape_string($conn,$_POST['search']);

$num = 1;
$sql1 = "SELECT * FROM `notification` WHERE status = 1 AND ( title LIKE '%{$search}%' OR detail LIKE '%{$search}%' )ORDER BY postDate DESC ";
$result1 = mysqli_query($conn, $sql1) or die("Query failed in img");
if($search == ''){
    echo ' ';
}else{
if(mysqli_num_rows($result1) > 0){
    echo '
    
<div class="container-fluid  m-0 mt-5 ">
<div class="row m-0">
    <div class="col-md-12 " >
        <div class="card " >
            <div class="card-header green mb-3  ">
              
               
            <h2 class=" fw-bold m-0 text-uppercase text-white">Search Data</h2>
            </div>
            <div class="card-body mt-0 p-0">

            <div class="container  ">
   ';
while ($row1 = mysqli_fetch_assoc($result1)) {

?>

       <div class="row border border-4 border-success   shadow rounded-2 p-2  mb-1 " style="min-height: 80px;">
                                <!-- ------------------------col 1----------------- -->
                                <div class=" col-md-1   d-flex align-items-center">
                                    <img class="media" src="<?php echo $row1['img']; ?>" alt="Image Here">
                                </div>
                                <!-- ------------------------col 2----------------- -->
                                <div class=" col-md-8 p-1 ">

                                    <!-- title -->
                                    <div class="  mb-1" style="font-size:16px"><a class="text-dark" style="font-family: 'Gabarito', sans-serif;" href="detail.php?d=<?php echo $row1['sNo']; ?>&<?php echo str_replace(" ","-",$row1['title']); ?>" target="_blank"><?php echo substr($row1['title'], 0, 85) . "...."; ?></a></div>





                                    <!-- category -->
                                    <div class="d-flex  justify-content-between align-items-center fw-bold text-uppercase" style="font-family: 'Kanit', sans-serif;">
                                        <div class="d-flex  justify-content-between align-items-center ">
                                            <?php
                                            $sql2 = "SELECT * FROM `firstCategory` WHERE id =  {$row1['catId']}";
                                            $result2 = mysqli_query($conn, $sql2) or die("Query failed in img");
                                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                            ?>
                                                <div class="" style="font-size: 14px;padding: 0px 5px 0px 0px;"><a class="grayText" href="mainCategory.php?main=<?php echo $row2['id']; ?>"> <?php echo $row2['firstCategory']; ?> </a></div>
                                            <?php }; ?>


                                            <!-- third category -->
                                            <?php
                                            $sql2 = "SELECT * FROM `category` WHERE catSNo =  {$row1['catId3']}";
                                            $result2 = mysqli_query($conn, $sql2) or die("Query failed in img");
                                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                            ?>
                                                <div class="grayText" style="font-size: 14px;padding: 0px 5px 0px 5px;"> > &nbsp; <a class="grayText" href="category.php?cat=<?php echo $row2['catSNo']; ?>"> <?php echo $row2['category']; ?></a></div>
                                            <?php

                                            }; ?>
                                        </div>

                                    </div>



                                    <!-- post date -->
                                    <div class=" row mt-1 p-0 d-flex justify-content-between align-items-center " style="font-size: 13px;font-family: 'Kanit', sans-serif;">
                                        <div class=" col-md-3 p-1 ps-2 grayText border-end border-black fw-bold text-success"> <span class="grayText"><i class="bi bi-calendar3"></i> &nbsp; Post Date -</span> <?php echo date("d-M-Y ", strtotime($row1['postDate'])); ?></div>
                                        <div class=" col-md-3 p-1 grayText border-end border-black fw-bold text-danger text-start"><span class="grayText"><i class="bi bi-calendar3"></i> &nbsp; Last Date -</span> <?php echo date("d-M-Y ", strtotime($row1['lastDate'])); ?></div>
                                        <div class=" col-md-3 p-1 grayText border-end border-black fw-bold text-start " style="font-size:14px"><i class="bi bi-people"></i> &nbsp; Total Vacancy - <?php echo $row1['vacancy'] . " "; ?></div>

                                        <!--location  second category -->
                                        <?php
                                        $sql2 = "SELECT * FROM `secondCategory` WHERE id =  {$row1['catId2']}";
                                        $result2 = mysqli_query($conn, $sql2) or die("Query failed in img");


                                        while ($row2 = mysqli_fetch_assoc($result2)) {
                                        ?>
                                            <div class=" col-md-3 grayText border-black fw-bold float-end text-start " style="font-size: 14px;padding: 0px 15px 0px 5px;"><i class="bi bi-geo-alt"></i><a class="grayText" href="stateCategory.php?stateId=<?php echo $row2['id']; ?>"> <?php echo $row2['secondCategory'] . " "; ?> </a> </div>
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
                                                $date1 = date("d-m-Y H:i:s", strtotime($p));

                                                $date2 = date("d-m-Y H:i:s", strtotime($l));

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
<?php }; echo ' </div>

</div>
</div>

</div>
</div>
</div>
'; }else{
    echo '

    <div class="container-fluid  m-0 mt-5 ">
<div class="row m-0">
    <div class="col-md-12 " >
        <div class="card " >
            <div class="card-header green mb-3  ">
              
               
            <h2 class=" fw-bold m-0 text-uppercase text-white">No Search Data</h2>
            </div>
            <p class="p-3">No Data Found / Search Some Other Keywords </p>
            </div>
            </div>
            </div>
            </div>

  ';
} }?>