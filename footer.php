<style>
      .move:hover{
        /* padding: 0px 0px 0px 20px; */
        transition-duration: 0.3s;
        /* transform: rotate(20deg); */
        color: white !important;
        text-decoration: none;
        }
</style>
<div class="mt-5">

    <!-- <div class="container-fluid mt-5">
        <div class="row " style="background-color:#242a30;">
            <div class="col-md-12 p-5 gray" style="border-radius: 0px 0px 40px 0px;"></div>
        </div>
    </div> -->
    <div class="container-fluid   " style="background-color:#242a30">
        <div class="row p-4">
            <div class="col-md-4   text-center d-flex justify-content-center align-items-center">
            <a class="move text-white" href="https://bharatjobfinder.com/">
                <img src="images/white.png" class="rotate" alt="" width="100px">
                
            </a>
            <a class="move text-white" href="https://bharatjobfinder.com/">
                <h2 class="white mt-5 fs-1 ms-3 " style="font-family: 'Tsukimi Rounded', sans-serif;">Bharat Job Finder
                <p class="fs-5" style="font-family: 'Architects Daughter', cursive;">Your Job Search Journey Made Easy</p>
            </h2>
                </a>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2 text-start p-2 mt-4">
                <ul class="list-group bg-transparent list-group-flush">
                    <li class="list-unstyled  p-2 bg-transparent p-2"><a href="about.php" class="text-white-50 move "><i class="bi bi-arrow-right-circle"></i> &nbsp;About Us</a></li>
                    <li class="list-unstyled  p-2 bg-transparent p-2"><a href="contact.php" class="text-white-50 move "><i class="bi bi-arrow-right-circle"></i> &nbsp;Contact Us</a></li>
                    <li class="list-unstyled  p-2 bg-transparent p-2"><a href="policy.php" class="text-white-50 move "><i class="bi bi-arrow-right-circle"></i> &nbsp;Privacy Policy</a></li>
                    <li class="list-unstyled  p-2 bg-transparent p-2"><a href="disclamer.php" class="text-white-50 move "><i class="bi bi-arrow-right-circle"></i> &nbsp; Disclamer</a></li>
                </ul>
            </div>
            <div class="col-md-2 p-2 mt-4 ">
                <ul class="list-group bg-transparent list-group-flush">

                    <?php
                    $sqlForCategory = "SELECT * FROM firstCategory";
                    $resultForCategory = mysqli_query($conn, $sqlForCategory) or die('Query Fail For Category');
                    while ($rowForCategory = mysqli_fetch_assoc($resultForCategory)) {
                    ?>
                        <li class="list-unstyled  p-2 bg-transparent p-2"><a href="mainCategory.php?main=<?php echo $rowForCategory['id'] ?>" class="text-white-50 move "><i class="bi bi-arrow-right-circle"></i> &nbsp; <?php echo $rowForCategory['firstCategory'] ?></a></li>

                    <?php } ?>
                </ul>

            </div>
            <div class="col-md-3 text-center  p-2 mt-4 ">
                <h3 class="text-white">Follow Us On</h3>
            <ul class=" bg-transparent  d-flex justify-content-center">
                <br>
                    <li class=" list-unstyled p-2 bg-transparent p-2"><a href="facebook.com" class="text-white-50 move "><i class="bi bi-facebook text-primary fs-1"></i> &nbsp;</a></li>
                    <li class=" list-unstyled p-2 bg-transparent p-2"><a href="" class="text-white-50 move "><i class="bi bi-whatsapp text-success fs-1"></i> &nbsp;</a></li>
                    <li class=" list-unstyled p-2 bg-transparent p-2"><a href="" class="text-white-50 move "><i class="bi bi-instagram text-danger fs-1"></i> &nbsp;</a></li>
                    <li class=" list-unstyled p-2 bg-transparent p-2"><a href="" class="text-white-50 move "><i class="bi bi-linkedin text-info fs-1"></i> &nbsp; </a></li>
                </ul>
            </div>
        </div>
        <div class="row shadow-lg p-1" style="background-color: #1c2327;">
            <div class="col-12 text-center text-white-50  p-2">
                <?php
                $currentDateTime = new DateTime('now');
                $currentDate = $currentDateTime->format('d-m-Y');
                // echo $currentDate;  
                $p = $currentDate;
                $date =  date("Y ", strtotime($p));;
                ?>
                Copyright <?php echo $date;  ?><a class="move text-white" href="https://bharatjobfinder.com/">Bharat Job Finder </a> Designed By <a class="move text-white" href="https://bharatjobfinder.com/">Bharat Job Finder </a>. All Rights Reserved

            </div>
        </div>
    </div>

</div>








<script>


    // $(document).ready(function() {
    //     $("#notification").on("click", function(e) {
    //         $.ajax({
    //             url: "loadNotification.php",
    //             type: "post",
    //             success: function(data) {
    //                 $(".card-body").html(data);
    //                 $('#notification').addClass("active")
    //                 $('#result').removeClass("active")
    //                 $('#admit').removeClass("active")
    //             }
    //         })
    //     })


    //     $("#result").on("click", function(e) {
    //         $.ajax({
    //             url: "loadResult.php",
    //             type: "post",
    //             success: function(data) {
    //                 $(".card-body").html(data);
    //                 $('#notification').removeClass("active")
    //                 $('#admit').removeClass("active")
    //                 $('#result').addClass("active")
    //             }
    //         })
    //     })


    //     $("#admit").on("click", function(e) {
    //         $.ajax({
    //             url: "loadAdmit.php",
    //             type: "post",
    //             success: function(data) {
    //                 $(".card-body").html(data);
    //                 $('#notification').removeClass("active")
    //                 $('#result').removeClass("active")
    //                 $('#admit').addClass("active")
    //             }
    //         })
    //     })


    //     $("#allnotification").on("click", function(e) {
    //         $.ajax({
    //             url: "loadAllNotification.php",
    //             type: "post",
    //             success: function(data) {
    //                 $(".card-body").html(data);
    //                 $('#allnotification').addClass("active")
    //                 $('#allresult').removeClass("active")
    //                 $('#alladmit').removeClass("active")
    //             }
    //         })
    //     })


    //     $("#allresult").on("click", function(e) {
    //         $.ajax({
    //             url: "loadAllResult.php",
    //             type: "post",
    //             success: function(data) {
    //                 $(".card-body").html(data);
    //                 $('#allnotification').removeClass("active")
    //                 $('#alladmit').removeClass("active")
    //                 $('#allresult').addClass("active")
    //             }
    //         })
    //     })


    //     $("#alladmit").on("click", function(e) {
    //         $.ajax({
    //             url: "loadAllAdmit.php",
    //             type: "post",
    //             success: function(data) {
    //                 $(".card-body").html(data);
    //                 $('#allnotification').removeClass("active")
    //                 $('#allresult').removeClass("active")
    //                 $('#alladmit').addClass("active")
    //             }
    //         })
    //     })
    // })


// comment box

// var main = function() {
//   $('.btn').click(function() {
//     var post = $('.status-box').val();
//     $('<li>').text(post).prependTo('.posts');
//     $('.status-box').val('');
//     $('.counter').text('250');
//     $('.btn').addClass('disabled');
//   });
//   $('.status-box').keyup(function() {
//     var postLength = $(this).val().length;
//     var charactersLeft = 250 - postLength;
//     $('.counter').text(charactersLeft);
//     if (charactersLeft < 0) {
//       $('.btn').addClass('disabled');
//     } else if (charactersLeft === 250) {
//       $('.btn').addClass('disabled');
//     } else {
//       $('.btn').removeClass('disabled');
//     }
//   });
// }
// $('.btn').addClass('disabled');
// $(document).ready(main)





    // live Search use{searchData} in any container to get data
    $(".liveSearch").on("keyup", function(e) {
        var search_term = $(this).val();
        $.ajax({
            url: "search.php",
            type: "post",
            data: {
                search: search_term
            },
            success: function(data) {
                if ($(".searchData").html(data) = '') {
                    $(".searchData").html(" ")
                }
            }
        })
       
    })
</script>


</body>

</html>