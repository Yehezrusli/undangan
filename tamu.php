<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location:index.php");
}
include("header.php");

?>


    <div class="container" style='padding-top:5%'>
        <center>
            <div class="row">
                <div class="col">
                    <h3>List Tamu</h3>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <table class="table table-hover mt-5" style='width:30%'>
                        <thead>
                            <tr >
                                <th class='text-center' scope="col">No</th>
                                <th class='text-center' scope="col">Name</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        $all_tamu = "SELECT * FROM Tamu";
                            if($res = $con->query($all_tamu)){
                                while($row = $res->fetch_array()){
                        ?>
                                <tr>
                                    <td class='text-center'> <?php echo $i++ ?></td>
                                    <td class='text-center'> <?php echo $row['Name'] ?></td>
                                </tr>
                            <?php
                            }
                        }
                            ?>
                        </tbody>    
                    </table>
                </div>
            </div>

        </center>
    </div>

</body>
</html>