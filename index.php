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
            font-family: 'cursive';
            color: #314968;
            font-size: 55px;
            letter-spacing: 3px;
            margin: 16px 0;
            padding-top: 70px;
            font-weight: inherit;
        }

        .placetime{
            font-family: 'Monospace';
            color: #333333;
            font-size: 18px;
            letter-spacing: 3px;
            margin: 16px 0;
            line-height: 1;
            font-weight: inherit;
        }

        .dateplace{
            font-family:"Cormorant Garamond"; 
            color: #314968; 
            font-size: 40px; 
            line-height: 1;
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
                                <a class="nav-link ms-4 active" href="index.php">Home</a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ms-4" id='matrimony' href="holymatrimony.php">Holy Matrimony</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ms-4" id='family' href="family.php">Family Members</a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ms-4" id='detail' href="detail.php">Wedding Details</a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ms-4" id='photo' href="photo.php">Photo</a> 
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            
            <div class='row'>
                <div class=col>
                    <center>
                        <img src="images/L1008961.jpg" class="img-fluid" alt="Cover Image" style="padding:5%">
                    </center>
                </div>
            </div>

            <div class="row">
                <div class="col-6" style='padding-right:0'>
                    <div class="mycontent-left">
                        <span class='dateplace'>
                            <center>
                                Mei <br> 16, 2021
                            </center>
                        </span>
                    </div>
                </div>
                <div class="col-6" style='padding-left:0'>
                    <div class="mycontent-right">
                        <span class='dateplace'>
                            <center>
                                Bandung <br> City
                            </center>
                    </span>
                    </div>
                </div>
            </div>

            <div class="row" style='padding-top: 10%'>
                <div class="col">
                    <span>
                        <center>
                            <p class='dateplace' style='font-size: 35px'>WEDDING DAY</p>      
                            <p class='placetime' style='font-size: 20px'>SUNDAY, MEI 16, 2021</p>        
                        </center>
                    </span>
                </div>
            </div>

            <div class="row" style='margin-top: 20px'>
                <div class="col">
                    <span style='font-size: calc(16px * 0.875); line-height: 0.5;'>
                        <center>
                            <p>Pullman Bandung Grand Central<br> </p>
                            <p>No 27 Jalan Diponegoro, Jawa Barat, 40115, Indonesia</p>
                        </center>
                    </span>
                </div>
            </div>

            <div class="row" style='padding-top: 100px'>
                <div class="col">
                    <span>
                        <center>
                            <p class='dateplace' style='font-size: 35px'>LIVE STREAMING</p>      
                        </center>
                    </span>
                </div>
            </div>

            <div class="row" style='margin-top: 40px'>
                <div class="col">
                    <span style='font-size: calc(16px * 0.875); line-height: 0.5;'>
                        <center>
                            <p>hope you will be able to join us in this virtual ceremony through instagram live</p>
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


