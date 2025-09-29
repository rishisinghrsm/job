<?php include 'header.php' ?>
<?php
// if ($_SESSION['role'] == 0) {
//     header('Location:dashboard.php');
// } ?>

<body>






    <div class="container mt-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-12">
                <table border cellspacing="20px" cellpadding="20px" class="w-100">
                    <thead style="border: 3px solid black;">
                        <tr>
                            <th>Sno</th>
                            <th>Comments To</th>
                            <th>Comments</th>
                            <th>Delete</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "config.php";


                        $sql = "SELECT * FROM comments LEFT JOIN notification ON notification.sNo = comments.to  ORDER BY comments.to DESC";
                        $result = mysqli_query($conn, $sql) or die('Query Fail For Category');
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr style="border: 1px solid black;">
                                <td><?php echo $row['to'] ?></td>
                                <td><?php echo substr($row['title'], 0, 55) . "...."; ?></td>
                                <td><?php echo $row['comment']; ?></td>
                               

                                <td><a href="deleteComments.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-success">Delete</a></td>
                            </tr>
                        <?php };
                        
                        ?>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
    <script language="JavaScript" type="text/javascript">
        function checkDelete() {
            return confirm('Are you sure?');
        }
    </script>
</body>

</html>