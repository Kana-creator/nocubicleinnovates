
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nocubicle Innovates</title>
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/waypoints.min.js"></script>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="./fontawesome/css/all.css">-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <link rel="shortcut icon" href="./imgs/logo4.png" />

    <style>
        *{
            margin: 0;
            padding: 0;
            font-size: 100%;
        }

        body{
            overflow-x: hidden;
        }

        p{
            font: 16px century-gothic, sans-serif;
            color: #4E4D4D;
            line-height: 35px;
        }

        nav.navbar{
            position: fixed;
            width: 100%;
            padding: 0 20px;
        }

        nav.navbar.waypoint{
            background: rgb(10,55,65);
        }

        nav.navbar.active{
            background: rgb(10,55,65);
        }

        .nav-item{
            padding: 5px 10px;
        }

        .navbar-brand{
            opacity: 1;
            animation: fed 5s ease-in infinite;
        }

        @keyframes fed {
            /*0%{
                opacity: .3;
            }*/

            50%{
                opacity: .4;
            }

            100%{
                opacity: 1;
            }
        }


        @media(max-width: 991px){
            nav.navbar{
                max-width: 100vw;
                transition: .1s;
                padding: 0 20px;
                position: fixed;
            }
        }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-md navbar-dark sticky-top">
        <div class="container-fluid">
        <h3><a href="index.php" class="navbar-brand">
                <h3><img src="./imgs/logo4.png" alt="" style="height: 90px; width: 200px;"></h3>
        </a></h3>
        <button id="close-nav-btn" class="navbar-toggler" data-toggle="collapse" type="button" data-target="#navbarResponsive" style="outline: none; display: none;">
        <span class="">X</span>
        </button>
        <button id="toggle-btn" class="navbar-toggler" data-toggle="collapse" type="button" data-target="#navbarResponsive" style="outline: none;">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto text-center col-lg-8">
                <li class="home nav-item">
                    <a href="./index.php" class="nav-link home" id="home">home</a>
                </li>

                <li class="home nav-item">
                    <a href="./about.php" class="nav-link about">about us</a>
                </li>
                
                <li class="nav-item">
                    <a href="./ourprojects.php" class="nav-link projects">our projects</a>
                </li>
                <li class="nav-item">
                    <a href="./contactus.php" class="nav-link contact">contact us</a>
                </li>
                <li class="nav-item">
                    <a href="./whatwedo.php" class="nav-link whatwedo">what we do</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>