<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pool</title>
    <!--- Style CSS ---->
    <link href="css/style.css" rel="stylesheet">
    <!--- Style BootStrap.CSS ---->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--- Style Silk.CSS ---->
    <link rel="stylesheet" href="css/slick.min.css" />

</head>

<body data-spy="scroll">
    <!-- ==== Section Header === -->
    <header id="myHeader">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-md">
                <!--- Toggler NavBar Button ---->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="#">
                        <img class="img-fluid" src="../Pool/images/logo.svg" alt="">
                    </a>
                    <ul class="navbar-nav ms-auto ml-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/') }} ">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Plans & pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <a  class="button login-btn primary_color_text ms-3" href="/userlogin">Login</a>
                        <button class="button login-btn ms-4 secondary_color_text-bg white" type="submit">Get Demo</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
