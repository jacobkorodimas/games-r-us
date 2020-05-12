<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f3bd12c617.js" crossorigin="anonymous"></script>

    <title>GAMES-R-US</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="index.php"><img src="img/games-R-us-logo.png" alt="games-R-Us-logo"></a>
            <!-- Sandwich button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navMenu"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Items in navbar -->
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ml-auto text-right">
                    <li class="nav-item <?php if ($page == 'home')  echo 'active'; ?>">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item <?php if ($page == 'games')  echo 'active'; ?>">
                        <a class="nav-link" href="games.php">Games</span></a>
                    </li>
                    <li class="nav-item <?php if ($page == 'aboutus')  echo 'active'; ?>">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item <?php if ($page == 'contactus')  echo 'active'; ?>">
                        <a class="nav-link" href="contactus.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>