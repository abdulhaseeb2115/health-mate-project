<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Boostrap Link -->
    <!--|||||||||||||||||||||||||||||||-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- FontAwesome Link -->
    <!--|||||||||||||||||||||||||||||||-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />



    <!-- GoogleFont Link -->
    <!--|||||||||||||||||||||||||||||||-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Poppins:ital,wght@0,900;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Monoton&family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Monoton&family=Righteous&display=swap" rel="stylesheet">



    <!--|||||||||||||||||||||||||||||||-->
    <!-- Jquery Link -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>


    <!--|||||||||||||||||||||||||||||||-->
    <!-- TITLE -->
    <title>
        <?php if (isset($title)) {
            echo $title;
        } ?>
    </title>

</head>



<!--|||||||||||||||||||||||||||||||-->
<!-- navbar -->
<style>
    /* default */
    * {
        padding: 0px;
        margin: 0px;
    }

    body {
        box-sizing: border-box;
        padding: 0px;
        margin: 0px;
    }


    /* navbar */
    .navbar {
        background-color: #1f145b;
        padding: 0px;
    }

    .navbar-brand {
        font-family: "Righteous";
        font-size: 1.9rem;
    }

    .logo {
        height: 62px;
        width: 70px;
        border-radius: 15px;
        margin: 0px;
        margin-left: 10px;
    }

    .nav-link {
        color: white;
        border: 2px solid rgb(255, 255, 255, 0.2);
        margin: 0px 10px;
        border-radius: 10px;
        padding: 5px;
    }

    .nav-link:hover {
        border: 2px solid rgb(255, 255, 255);
        color: white;
    }



    /* dropdown menu */
    .menu {
        background-color: #1f145b;
        margin-left: -20px;
        height: 200px;
        width: 120px !important;
        border-radius: 10px;
    }

    .dropdown-link-container {
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-around;
    }

    .dropdown-item {
        width: 145px;
        margin: 0px;
    }

    .dropdown-item-2 {
        width: 130px;
        margin: 2px 0px;
    }

    .dropdown-item:hover {
        color: white;
        background-color: transparent;
    }

    /* utility */
    .active {
        border: 2px solid rgb(255, 255, 255);
    }
</style>

<body>

    <!-- NAVBAR -->
    <!--|||||||||||||||||||||||||||||||-->
    <nav class="navbar navbar-expand" style="height: 10vh;">
        <img class="logo" src="../project3/images/LogoWhite_00000 - Copy.png" alt="">
        <a href="" class="navbar-brand text-white">HEALTH MATE</a>

        <ul class="navbar-nav ml-auto">

            <!-- home -->
            <li class="nav-item">
                <a class="nav-link 
                <?php if (isset($homeActive)) {
                    echo $homeActive;
                } ?>" href="../project3/homePage.php">Dashboard</a>
            </li>

            <!-- nutrition -->
            <li class="nav-item">

                <div class="btn-group">
                    <div class="nav-link
                    <?php if (isset($nutritionActive)) {
                        echo $nutritionActive;
                    } ?>">
                        <a class="d-inline text-white" style="text-decoration: none;" href="../project3/nutrition.php">Nutrition
                        </a>
                        <span class="dropdown-toggle bg-transparent border-0 d-inline" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                        </span>
                        <div class="dropdown-menu menu" style="width: 100px;">
                            <div class="dropdown-link-container">
                                <h6 class="dropdown-header">Page Contents</h6>
                                <a class="dropdown-item nav-link " href="../project3/nutrition.php#plans">Diet Plans</a>
                                <a class="dropdown-item nav-link " href="../project3/nutrition.php#foods">Food Data</a>
                                <a class="dropdown-item nav-link " href="../project3/nutrition.php#counter">Calorie Counter</a>
                            </div>
                        </div>
                    </div>
                </div>


            </li>

            <!-- workout -->
            <li class="nav-item">

                <div class="btn-group">
                    <div class="nav-link
                    <?php if (isset($workoutActive)) {
                        echo $workoutActive;
                    } ?>">
                        <a class="d-inline text-white" style="text-decoration: none;" href="../project3/workout.php">Workout
                        </a>
                        <span class="dropdown-toggle bg-transparent border-0 d-inline" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                        </span>
                        <div class="dropdown-menu menu" style="width: 100px; height: 290px;">
                            <div class="dropdown-link-container">
                                <h6 class="dropdown-header">Page Contents</h6>
                                <a class="dropdown-item nav-link dropdown-item-2" href="../project3/workout.php#challenges">Challenges</a>
                                <a class="dropdown-item nav-link dropdown-item-2" href="../project3/workout.php#plans">Plans</a>
                                <a class="dropdown-item nav-link dropdown-item-2" href="../project3/workout.php#videos">Videos</a>
                                <a class="dropdown-item nav-link dropdown-item-2" href="../project3/workout.php#counter">Calculate Bmi</a>
                            </div>
                        </div>
                    </div>
                </div>


            </li>

            <!-- social -->
            <li class="nav-item">
                <a class="nav-link
                <?php if (isset($socialActive)) {
                    echo $socialActive;
                } ?>" href="../project3/social.php">Social</a>
            </li>

            <!-- gym -->
            <li class="nav-item">
                <a class="nav-link
             <?php if (isset($gymActive)) {
                    echo $gymActive;
                } ?>" href="../project3/gym.php">Gym</a>
            </li>

            <!-- shops -->
            <li class="nav-item">
                <a class="nav-link
             <?php if (isset($shopsActive)) {
                    echo $shopsActive;
                } ?>" href="../project3/shops.php">Shops</a>
            </li>

            <!-- setings -->
            <li class="nav-item">
                <a class="nav-link
             <?php if (isset($settingsActive)) {
                    echo $settingsActive;
                } ?>" href="../project3/settings.php">Settings</a>
            </li>

        </ul>
    </nav>
    <!--|||||||||||||||||||||||||||||||-->

</body>