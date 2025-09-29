<?php

include_once "config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        // $url = $_GET['d'];
       
        $meta_url = $_SERVER['REQUEST_URI'];
        $path = getcwd();
        // echo $path;
        $page = basename($_SERVER['PHP_SELF']);
        // echo $page;

        switch ($page) {
            case "detail.php";
                if (isset($_GET['d'])) {
                    
                    $sql1 = "SELECT * FROM `notification` where sNo = {$_GET['d']}";
                    $result1 = mysqli_query($conn, $sql1) or die("Query failed in img");
                    $row1 = mysqli_fetch_assoc($result1);
                    $p = $row1['title'];
                    $img = $row1['img'];

                    $pageTitle = $p;
                } else {
                    $pageTitle = "Bharat Job Finder";
                }
                break;
            case "category.php";
                if (isset($_GET['cat'])) {
                    $sql1 = "SELECT * FROM `category` where catSNo = {$_GET['cat']}";
                    $result1 = mysqli_query($conn, $sql1) or die("Query failed in img");
                    $row1 = mysqli_fetch_assoc($result1);
                    $pageTitle = $row1['category'];
                } else {
                    $pageTitle = "Bharat Job Finder";
                }
                break;
            case "stateCategory.php";
                if (isset($_GET['stateId'])) {
                    $sql1 = "SELECT * FROM `secondCategory` where id = {$_GET['stateId']}";
                    $result1 = mysqli_query($conn, $sql1) or die("Query failed in img");
                    $row1 = mysqli_fetch_assoc($result1);
                    $pageTitle = $row1['secondCategory'];
                } else {
                    $pageTitle = "Bharat Job Finder";
                }
                break;
            case "mainCategory.php";
                if (isset($_GET['main'])) {
                    $sql1 = "SELECT * FROM `firstCategory` where id = {$_GET['main']}";
                    $result1 = mysqli_query($conn, $sql1) or die("Query failed in img");
                    $row1 = mysqli_fetch_assoc($result1);
                    $pageTitle = $row1['firstCategory'];
                } else {
                    $pageTitle = "Bharat Job Finder";
                }
                break;
            default:
                echo "Find Latest Sarkari, Private, Public, State Job Notification, Sarkari Result And Admit Card | Bharat Job Finder ";
        }

        ?>

        <?php if (isset($_GET['cat']) || isset($_GET['d']) || isset($_GET['stateId']) || isset($_GET['main'])) {
            echo $pageTitle . " Jobs " . " | Bharat Job Finder";
        } else {
            echo "| Sarkari Result , Sarkari Admit Card And Job Notification";
        } ?>
    </title>
    <link rel="shortcut icon" href="images/white.png" type="image/x-icon">
    <link rel="favicon" href="images/white.png" type="image/x-icon">
    <meta property="og:title" content="<?php if (isset($_GET['cat']) || isset($_GET['d'])) {
                                            echo  $pageTitle;
                                        } else {
                                            echo "Find Latest Job  | Bharat Job Finder";
                                        }; ?>">
    <meta property="og:image" content="<?php if (isset($img)) {
                                            echo $img;
                                        } else {
                                            echo "https://bharatjobfinder.com/images/logo.png";
                                        }; ?>">
    <meta property="og:url" content="<?php echo $meta_url ?>">
    <meta property="og:site_name" content="https://bharatjobfinder.com">
    <meta charset="UTF-8">
    <meta name="description" content="<?php if (isset($_GET['cat']) || isset($_GET['d'])) {
                                            echo $pageTitle . " | Bharat Job Finder";
                                        } else {
                                            echo "Find Latest Sarkari, Private, Public, State Job Notification, Sarkari Result And Admit Card | Bharat Job Finder ";
                                        } ?>">
    <meta name="keywords" content="  <?php if (isset($_GET['cat']) || isset($_GET['d'])) {
                                            echo $pageTitle . " | Bharat Job Finder";
                                        } else {
                                            echo "Find Latest Job || Sarkari - Result - Nokari, Private, Public, State Job Notification | Bharat Job Finder | sarkari exam
sarkari result 2023
sarkari job
exam sarkari result info
sarkari result 12th
sarkari result 10th 2023
sarkari result 10+2 latest job
rojgar result
sarkari jharkhand
sarjari result bccs sarjari result jac sarjari result ssc cgl
 ";
                                        } ?>">

    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="bootstrap.css">

    <!--google verify-->
    <meta name="google-site-verification" content="8W8xVhmd8V_kJwPck_i1-7PRr28i3VV1KapdHkG729A" />
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-C19YT2GRSQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-C19YT2GRSQ');
</script>
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.0/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.0/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.0/dist/js/uikit-icons.min.js"></script>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <style>

@import url('https://fonts.googleapis.com/css2?family=Tsukimi+Rounded:wght@700&display=swap');
        .container.row:nth-child(even) {
            background-color: #9a3030;

        }

        table {
            width: 100%;
            word-wrap: break-word;
            overflow: auto;
        }

        .col-md-7 table {
            overflow: scroll;

        }

        thead,
        tbody,
        tfoot,
        tr,
        td,
        th {
            border-width: 2px;
            padding: 3px;
        }

        .media {
            display: block;
        }

        @media (max-width:500px) {
            .media {
                display: none;
            }
            
            
        }

        .media_hide_on_mobile{
            display: block;
        }
        .show_on_mobile{
            display: none;
        }
        
        @media (max-width:500px) {
            .media_hide_on_mobile {
                display: none;
            }
            .show_on_mobile{
            display: block;
        }

            
        }

        .expended{
            color:red;
            animation: blink 1s infinite;
            font-weight: 700;
        }

        @keyframes blink {
            0%{
                color:red;
            }
            50%{
                color:black;
            }
        }

        .white {
            color: #fff;
        }

        .white:hover {
            color: white;
        }

        .green {
            background-color: #138808;
        }

        .greentext {
            color: #138808;
        }

        .orange {
            background-color: #FF9933;
        }

        .orangetext {
            color: #FF9933;
        }

        .grayText {
            color: gray;
        }

        .gray {
            background-color: #f7f8fa;
        }

        .tri {
            background-image: linear-gradient(120deg, orange, white, green);
        }

        .trirev {
            background-image: linear-gradient(240deg, orange, white, green);

        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .rotate {
            animation-name: rotate;
            animation-duration: 6s;
            animation-iteration-count: infinite;

            /* overflow: hidden; */
            /* z-index: 0; */
            ;
        }

        ::placeholder {
            color: red;
            opacity: 1;
            /* Firefox */
        }

        ::-ms-input-placeholder {
            /* Edge 12 -18 */
            color: red;
        }

        ::-webkit-scrollbar-thumb {

            background-color: gray;
        }

        ::-webkit-scrollbar {
            background-color: white;
            width: 9px;
        }

        /* comment box */
      


.status-box{
   box-shadow:10px 10px 50px black;
}


.container {
  width: 100%;
  margin-top: 20px;
 
}
.button-group {
  margin-bottom: 20px;
  float: inline-end;
    margin-top: 20px;

}
.counter {
  display: inline;
  margin-top: 0;
  margin-bottom: 0;
  margin-right: 10px;
}
.status-box{
   box-shadow:10px 10px 20px black;
}
.posts {
  clear: both;
  list-style: none;
  padding-left: 0;
  width: 100%;
  text-align: left;
}
.posts li {
  background-color: #fff;
  border: 1.5px solid #d8d8d8;
  border-radius: 10px;
  padding-top: 10px;
  padding-left: 20px;
  padding-right: 20px;
  padding-bottom: 10px;
  margin-bottom: 10px;
  word-wrap: break-word;
  min-height: 42px;
  box-shadow:8px 8px 5px #888888;
}
.btn-primary {
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
}


    </style>
</head>

<body class="gray" style="zoom:85%; !important">
    <!-- <br> -->
    <!--  style="box-shadow: 5px 10px 41px black;" -->
    <div class="tri container-fluid shadow">

        <div class="header row tri p-4 border-bottom d-flex justify-content-between align-items-center overflow-hidden" style="background-image: url(images/gif.gif); background-position: -100px -110px;background-repeat:no-repeat;background-size: 200px">
            <!-- <img src="images/logo.png" class="rotate" width="205px" alt=""> -->
            <div class='col-md-3' style="text-align:center; text-shadow: 2px 2px black;"><a href="index.php" class="fs-4 ms-md-5  text-center m-auto  text-capitalize text-dark fw-bold " style="font-family: 'Tsukimi Rounded', sans-serif;"> Bharat job Finder </a>
       </div>
            <div class=" col-md-4 search">
                <input type="search "  class="form-control m-auto w-100 shadow-lg bg-white rounded-pill liveSearch border-0 text-primary fw-bold" placeholder="Search Your Job Here">
            </div>
        </div>
    </div>





    <div class="categories  mt-2">
        <div class="  overflow-auto  text-center d-flex align-items-center  justify-content-md-center  ">
            <span class=" p-1 text-white text-center bg-primary border-end border-white border-bottom"><a href="index.php" class="text-white text-nowrap p-2 text-decoration-none">
                    HOME
                </a></span>
            <?php

            include_once 'config.php';
            $sqlForCategory = "SELECT * FROM firstCategory";
            $resultForCategory = mysqli_query($conn, $sqlForCategory) or die('Query Fail For Category');
            while ($rowForCategory = mysqli_fetch_assoc($resultForCategory)) {
            ?>
                <span class=" text-center m-1  p-1 text-white text-break-none text-center green rounded border-end border-white border-bottom"><a href="mainCategory.php?main=<?php echo $rowForCategory['id'] ?>" class="text-white p-1 text-decoration-none text-nowrap ">
                        <?php echo $rowForCategory['firstCategory'] ?>
                    </a></span>
            <?php } ?>
            <?php


            $sqlForCategory = "SELECT * FROM category";
            $resultForCategory = mysqli_query($conn, $sqlForCategory) or die('Query Fail For Category');
            while ($rowForCategory = mysqli_fetch_assoc($resultForCategory)) {
            ?>
                <span class=" text-center m-1  p-1 text-white text-center orange rounded border-end border-white border-bottom"><a href="category.php?cat=<?php echo $rowForCategory['catSNo'] ?>" class="text-white p-2 text-uppercase text-decoration-none text-nowrap">
                        <?php echo $rowForCategory['category'] ?>
                    </a></span>
            <?php }; ?>


        </div>
    </div>
    

    <!-- <br> -->
    <div class="  overflow-auto mt-2 p-1 text-center d-flex orange   justify-content-md-center  align-items-center">
        <?php


        $sqlForCategory = "SELECT * FROM secondCategory ";
        $resultForCategory = mysqli_query($conn, $sqlForCategory) or die('Query Fail For Category');
        while ($rowForCategory = mysqli_fetch_assoc($resultForCategory)) {

        ?>
            <span class="text-center m-1 border-white  bg-white border "><a style="height: 30px;" href="stateCategory.php?stateId=<?php echo $rowForCategory['id'] ?>" class="btn  p-2 d-flex justify-content-between align-items-center text-decoration-none text-nowrap">
                    <?php echo $rowForCategory['secondCategoryShort'] ?>
                </a></span>
        <?php }; ?>
    </div>


    <div class="container-fluid ">
        <div class="row ">
            <div class="col-md-9 m-auto searchData ">

            </div>
        </div>
    </div>