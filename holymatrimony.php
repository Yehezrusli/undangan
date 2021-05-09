<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Invitation</title>
    <style>
        body {
            background-image: url('images/blur-background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-position: center;
        }
        .cover{
            width: 100%;
            background: rgba(192,192,192,0.7);
            position: relative;
            min-height: 100vh;
            padding-bottom: 50px;
            margin-bottom: 100px
        }

        .title{
            font-family: 'Cormorant Garamond';
            color: #314968;
            font-size: 55px;
            letter-spacing: 3px;
            margin: 16px 0;
            padding-top: 70px;
            line-height: 1;
            font-weight: inherit;
        }

        .placetime{
            font-family: 'Monospace';
            color: #333333;
            font-size: 18px;
            letter-spacing: 3px;
            margin: 16px 0;
            line-height: 1.5;
            font-weight: inherit;
        }

        .dateplace{
            font-family:"Cormorant Garamond"; 
            color: #314968; 
            font-size: 40px; 
            letter-spacing: 3px;
        }

        .mycontent-right {
            border-left: 1px solid #333;
            border-color: #314968; 
        }

        .mytop{
            border-top: 3px solid #333;
            border-color: #314968;
            border-length:20%
        }

    </style>
</head>
<body>
    <div class='container'>
        <div class='cover'>
            <div class='row' style="margin-top:10%;">
                <div class='col'>
                    <center>
                        <h1 class='title'>YOEL & IVANY</h1>
                    </center>
                </div>
            </div>
            <div class='row'>
                <div class='col'>
                    <center>
                        <p class='placetime'>SUNDAY, MEI 16, 2021 • BANDUNG, BANDUNG CITY, WEST JAVA, INDONESIA</p>
                    </center>
                </div>
            </div>
            <div class='row'>
                <nav class="navbar navbar-light navbar-expand-md justify-content-md-center justify-content-start ">
                    <button class="navbar-toggler ms-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <ul class="navbar-nav mx-auto text-md-center text-left">
                            <li class="nav-item">
                                <a class="nav-link ms-4" href="index.php">Home</a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ms-4 active" href="holymatrimony.php">Holy Matrimony</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ms-4" href="family.php">Family Members</a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ms-4" href="detail.php">Wedding Details</a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ms-4" href="photo.php">Photo</a> 
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
          
            <div class="row" style='padding-top: 2%'>
                <div class="col">
                    <center>
                        <?php
                            if (isset($_POST['submit'])) {
                                $name = $_POST['name'];

                                $get_tamu= "SELECT name FROM Tamu WHERE name = '$name'";
                                $result = $con->query($get_tamu);
                                $row = $result->fetch_array();

                                if ($result->num_rows > 0) {
                                    echo '
                                        <div class="alert alert-danger" role="alert" style="width:50%">
                                            You already registered!
                                        </div>
                                        ';
                                    } else {
                                    $insert_tamu = "INSERT INTO Tamu (name) VALUES ('$name')";
                                    if($con->query($insert_tamu)){
                                        echo '
                                            <div class="alert alert-success" role="alert" style="width:50%">
                                                We really greatfull with you attendance
                                            </div>
                                        ';
                                    }else{
                                        echo "gagal";
                                    } 
                                }
                            }
                        ?>
                    </center>

                    <span>
                        <center>
                            <p class='dateplace' style='font-size: 40px'>HOLY MATRIMONY</p>
                            <p class='placetime' style='font-size: 18px'>We would like to invite you to our Holy Matrimony<br> at</p>      
                            <p class='placetime' style='font-size: 20px'>PULLMAN BANDUNG GRAND CENTRAL</p>        
                        </center>
                    </span>
                </div>
            </div>

            <div class="row" style='margin-top: 20px'>
                <div class="col">
                    <span style='font-size: calc(16px * 0.875); line-height: 0.5;'>
                        <center>
                            <p>Jalan Diponegoro No. 24 Bandung</p>
                            <p>03.00 PM</p>
                        </center>
                    </span>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <span>
                        <center>
                            <p class='placetime' style='font-size: 25px'>(PRIVATE CEREMONY)</p>        
                        </center>
                    </span>
                </div>
            </div>

            <div class="row" style='margin-top: 20px'>
                <div class="col">
                    <span style='font-size: calc(16px * 0.875); line-height: 0.5;'>
                        <center>
                            <p>with</p>
                            <p>Pdt. Joni Aswan</p>
                        </center>
                    </span>
                </div>
            </div>

            <div class="row" style='margin-top: 10px'>
                <div class="col">
                    <span>
                        <center>
                            <p class='placetime' style='font-size: 18px'>Due to this pandemic situation, <br> we need to register every guest that willl come to our Matrimony to maintain health protocols. </p> 
                            <p class='placetime' style='font-size: 18px'>If you want to attend our ceremony, <br> please fill you full name in the box bellow.</p>      
                        </center>
                    </span>
                </div>
            </div>

            <div class="row">
                <div class="col mx-5" >
                    <center>
                        <form method="POST" action="holymatrimony.php" class="pt-2">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" required style='width:50%'>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>
                    </center>
                </div>
            </div>

            <div class="row" style='padding-top: 40px'>
                <div class="col">
                    <span>
                        <center>
                            <p class='dateplace' style='font-size: 35px'>LIVE STREAMING</p>      
                        </center>
                    </span>
                </div>
            </div>

            <div class="row" style='margin-top: 15px'>
                <div class="col">
                    <span style='font-size: calc(16px * 0.875); line-height: 1.5;'>
                        <center>
                            <p>hope you will be able to join us in this <br> virtual ceremony through instagram live</p>
                        </center>
                    </span>
                </div>
            </div>

            <div class="row" style='margin-top: 40px'>
                <div class="col">
                    <center>
                        <a class="btn btn-secondary" href="https://www.instagram.com/ivanyvanie/" role="button" style='background-color:#314968; font-color: white'>Click Me</a>
                    </center>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <center>
                        <h1 class='title'>Y&I</h1>
                    </center>
                </div>
            </div>

            <center>
                <div class="row" style='width:150px'>
                    <div class="col mytop">
                        <p class='placetime'>16.5.2021</p>
                    </div>
                    </div>
            </center>

        </div>
    </div>
</body>
</html>