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
            line-height: 1;
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
                                <a class="nav-link ms-4" href="holymatrimony.php">Holy Matrimony</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ms-4 active" href="family.php">Family Members</a> 
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
          
            <div class="row" style='padding-top: 7%'>
                <div class="col">
                    <span>
                        <center>
                            <p class='dateplace' style='font-size: 30px'>HADI KURNIAWAN RUSLI</p>      
                            <p class='placetime' style='font-size: 25px'>HIE TJOE KIAT</p>        
                            <p style='font-size: calc(16px * 0.875); line-height: 0.5;'>Father of Yoel Rusli</p>
                        </center>
                    </span>
                </div>
            </div>

            <div class="row" style='padding-top: 3%'>
                <div class="col">
                    <span>
                        <center>
                            <p class='dateplace' style='font-size: 30px'>KOMALAWATI</p>      
                            <!-- <p class='placetime' style='font-size: 25px'>HIE TJOE KIAT</p>         -->
                            <p style='font-size: calc(16px * 0.875); line-height: 0.5;'>Mother of Yoel Rusli</p>
                        </center>
                    </span>
                </div>
            </div>

            <div class="row" style='padding-top: 3%'>
                <div class="col">
                    <span>
                        <center>
                            <p class='dateplace' style='font-size: 30px'>TEDDY</p>      
                            <p class='placetime' style='font-size: 25px'>JIO JING TJIE</p>        
                            <p style='font-size: calc(16px * 0.875); line-height: 0.5;'>Father of Ivany Ayu Azarine</p>
                        </center>
                    </span>
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