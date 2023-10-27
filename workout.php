<?php
$title = "Workouts";
$workoutActive = " active";
include("./includes/head.php");
?>

<!-- main animation -->
<style>
    svg {
        z-index: 999;
        display: block;
        width: 200px;
        height: 200px;
    }

    svg circle {
        z-index: 999;
        fill: none;
        stroke-width: 6px;
        transform-origin: 70px 70px 0;
        transform: rotate(270deg);
    }

    svg circle:nth-child(1) {
        stroke: rgba(255, 255, 255, .2);
    }

    svg circle:nth-child(2) {
        stroke-dasharray: 402.124;
        stroke-dashoffset: 402.124;
        transition: all 3s ease-out;
    }

    svg[percent="30"] circle:nth-child(2) {
        stroke-dashoffset: 281.4868;
        stroke: red;
    }

    svg[percent="92"] circle:nth-child(2) {
        stroke-dashoffset: 120.6372;
        stroke: #7fc146;
    }

    svg text {
        fill: #eee;
    }

    svg text.value {
        font-size: 36px;
        font-weight: 300;
    }

    svg text.caption {
        font-weight: bold;
        font-size: 12px;
        text-transform: uppercase;
    }

    .main-animation {
        margin-top: 200px;
        margin-left: -250px;
        z-index: 99;
    }
</style>

<!-- scroll -->
<style>
    /* width */
    #challenges-container::-webkit-scrollbar,
    .vidPlans::-webkit-scrollbar,
    .workoutPlans::-webkit-scrollbar,
    .content-container::-webkit-scrollbar {
        width: 10px;
    }

    /* Track */
    #challenges-container::-webkit-scrollbar-track,
    .vidPlans::-webkit-scrollbar-track,
    .workoutPlans::-webkit-scrollbar-track,
    .content-container::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Handle */
    #challenges-container::-webkit-scrollbar-thumb,
    .vidPlans::-webkit-scrollbar-thumb,
    .content-container::-webkit-scrollbar-thumb,
    .workoutPlans::-webkit-scrollbar-thumb {
        background: #888;
    }

    /* Handle on hover */
    #challenges-container::-webkit-scrollbar-thumb:hover,
    .vidPlans::-webkit-scrollbar-thumb:hover,
    .content-container::-webkit-scrollbar-thumb:hover,
    .workoutPlans::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
</style>


<!-- css -->
<style>
    body {
        overflow-x: hidden;
    }

    html {
        scroll-behavior: smooth;
    }

    /* main page */


    .main {
        position: relative;
        height: 90vh;
        width: 100%;
        display: flex;
        background-color: black;
        background-image: url('./images/dark_back3.jpeg');
        background-position: right;
        background-size: 85%;
        background-repeat: no-repeat;
    }

    .main::before {
        z-index: 0;
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-color: #7f53ac;
        background-image: linear-gradient(315deg, #7f53ac 0%, #647dee 74%);
        opacity: 0.3;
    }

    .back-img {
        position: absolute;
        top: 0%;
        left: 0%;
        height: 100%;
        width: 100%;
        z-index: 0;
    }


    h2 {
        color: white;
        font-family: "Montserrat";
        font-weight: bold;
        margin: 70px 0px 0px 20px;
        font-size: 2rem;
        z-index: 999;

    }

    /* ||||||||||||||||||||||||||||||||||||||||| */
    .first {
        height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-around;
        flex-direction: column;
        background-color: #a4508b;
        background-image: linear-gradient(326deg, #a4508b 0%, #5f0a87 74%);

    }

    .challenges-heading {
        font-size: 2.8rem;
        opacity: 0.7;
    }

    .challenges-sub-headings {
        font-family: "Ubuntu";
        margin-bottom: 40px;

    }

    .challenges-container {
        height: 70vh;
        width: 85%;
        overflow-y: auto;
        margin-bottom: 50px;
    }

    .challenges {
        display: flex;
        flex-wrap: wrap;
    }

    .challenges img {
        height: 150px;
        border-radius: 10px;
        margin: 10px 20px;
    }

    /* |||||||||||||||||||||||||||||||||||| */
    /* second */
    .second {
        height: 100vh;
        background-image: url('./images/gym2.jpg');
        position: relative;
        background-position: center;
        background-size: 100%;
        background-repeat: no-repeat;
    }

    .second::before {
        z-index: 0;
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-color: black;
        opacity: 0.8;
    }

    .ul-2 {
        padding: 50px 0px 0px 50px;
        list-style-type: none;
        height: 100px;
        width: 200px;
    }

    .li-2 {
        font-size: 25px;
        width: 200px;
        height: 35px;
        color: white;
        border-left: 0.08em solid;
        border-radius: 6px;
        position: relative;
        cursor: pointer;
    }

    .li-2::before,
    .li-2::after {
        content: '';
        position: absolute;
        width: inherit;
        border-left: inherit;
        border-radius: 6px;
    }

    .li-2::before {
        height: 80%;
        top: 10%;
        left: calc(-0.15em - 0.08em * 2);
        filter: brightness(0.8);
    }

    .li-2::after {
        height: 60%;
        top: 20%;
        left: calc(-0.15em * 2 - 0.08em * 3);
        filter: brightness(0.6);
    }

    .li-2 span {
        position: relative;
        height: 120%;
        top: -10%;
        box-sizing: border-box;
        border: 1px solid rgb(255, 255, 255, 0.2);
        border-radius: 6px;
        background-color: #1f145b;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: "Ubuntu";
        transform: translateX(calc(-0.15em * 3 - 0.08em * 2));
        transition: 0.3s;
        z-index: 10;
    }

    .li-2:hover span {
        transform: translateX(0.15em);
        border-color: rgb(255, 255, 255);
    }

    .plans-container {
        height: 70vh;
        width: 80%;
        position: absolute;
        left: 10.5%;
        top: 22%;
    }

    .search-plan {
        font-family: "Montserrat";
        color: white;
        position: absolute;
        font-size: 4rem;
        top: 2%;
        left: 35%;
    }

    /* form cover */
    .screen-cover {
        background-color: rgb(31, 20, 91, 0.7);
        position: fixed;
        top: 0%;
        left: 0%;
        height: 100vh;
        width: 100%;
        z-index: 100;
        display: none;
    }

    /* close form */
    .close-form {
        position: absolute;
        top: 4%;
        right: 3%;
        padding: 3px 10px;
        border: 1px solid rgb(255, 255, 255, 0.5);
        border-radius: 6px;
        color: white;
        cursor: pointer;
    }

    .close-form:hover {
        border: 1px solid rgb(255, 255, 255);
    }

    /* data form */
    .data-form-container {
        display: none;
        z-index: 200;
        position: fixed;
        top: 13%;
        left: 30%;
        background-color: #581BC7;
        height: 75%;
        width: 40%;
        border-radius: 10px;
        padding: 50px 30px;
    }

    .data-form-heading {
        font-family: "Montserrat";
        color: white;
        font-size: 1.8rem;
        margin-left: 60px;
        margin-bottom: 40px;
    }

    .data-form-container label {
        font-family: "Montserrat";
        color: white;
    }

    .data-form-container button {
        font-family: "Montserrat";
        margin-top: 40px;
        background-color: #1f145b;
        color: white;
    }

    /* ||||||||||||||||||||||||||||||||||||||||| */
    /* third */
    .third {
        width: 100%;
        height: 100vh;
        padding: 0px;
        margin: 0px;
        background-color: #923cb5;
        background-image: linear-gradient(147deg, #923cb5 0%, #000000 74%);
    }

    .videos-row {
        padding: 0px;
        margin: 0px;
        height: 100%;
        width: 100%;
    }

    .content-container {
        display: flex;
        align-items: center;
        flex-direction: column;
        overflow-y: auto;
        height: 100vh;
    }

    .left-content {
        font-family: "Ubuntu";
        font-size: small;
        color: white;
        border: 1px solid white;
        border-radius: 4px;
        margin: 10px 0px;
        width: 120px;
        text-align: center;
        cursor: pointer;
    }

    .video-container {
        height: 80vh;
        width: 95%;
        display: flex;
        flex-wrap: wrap;
        margin: 0px;
        padding: 40px;
    }

    /* ||||||||||||||||||||||||||||||||||||||||| */
    /* fifth */
    .fifth {
        height: 100vh;
        width: 100%;
        background-color: #8953EC;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .calculator {
        height: 70%;
        width: 30%;
        padding: 40px;
        border-radius: 10px;
        background-color: #682ED3;
        color: white;
    }

    .calculator label {
        font-family: "Ubuntu";
        font-weight: bold;
    }

    .calculator-heading {
        font-family: "Montserrat";
        font-size: 1.5rem;
    }

    .calculator button {
        margin-top: 60px;
    }
</style>





<body>
    <!-- ---------------------------------------- -->
    <!-- main top -->
    <div class="container-fluid main">

        <h2>WORKOUT HISTORY</h2>

        <div class="main-animation">
            <svg id='gaugeCPU' percent='0'>
                <circle cx='70' cy='70' r='64'></circle>
                <circle cx='70' cy='70' r='64'></circle>

                <text class="value" x="70" y="75" text-anchor="middle">
                    <tspan>0%</tspan>
                </text>

                <text class="caption" x="70" y="100" text-anchor="middle">
                    <tspan>Plan</tspan>
                </text>
            </svg>

            <svg id='gaugeMemory' percent='0'>
                <circle cx='70' cy='70' r='64'></circle>
                <circle cx='70' cy='70' r='64'></circle>

                <text class="value" x="70" y="75" text-anchor="middle">
                    <tspan>0%</tspan>
                </text>

                <text class="caption" x="70" y="100" text-anchor="middle">
                    <tspan>CHALLENGE</tspan>
                </text>
            </svg>

        </div>


    </div>
    <!-- ---------------------------------------- -->


    <!-- ---------------------------------------- -->
    <!-- challenges/ first -->
    <div id="challenges" class="container-fluid first">
        <!-- challenges heading -->
        <h2 class="challenges-heading">
            Don't Limit Your Challenges , Challenge Your Limits !
        </h2>

        <!-- challlengess -->
        <div id="challenges-container" class="challenges-container">
            <h2 class="challenges-sub-headings">ONE WEEK CORE WORKOUT</h2>
            <div class="challenges">
                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/workout/monthly/3.png") . '"><img src="/php/project3/images/workout/monthly/3.png"> </a>';
                ?>

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/2.png") . '"><img src="/php/project3/images/challenges/2.png"> </a>';
                ?>
                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/workout/monthly/3.png") . '"><img src="/php/project3/images/workout/monthly/3.png"> </a>';
                ?>
                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/workout/monthly/3.png") . '"><img src="/php/project3/images/workout/monthly/3.png"> </a>';
                ?>

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/2.png") . '"><img src="/php/project3/images/challenges/2.png"> </a>';
                ?>
                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/workout/monthly/3.png") . '"><img src="/php/project3/images/workout/monthly/3.png"> </a>';
                ?>

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/2.png") . '"><img src="/php/project3/images/challenges/2.png"> </a>';
                ?>

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/2.png") . '"><img src="/php/project3/images/challenges/2.png"> </a>';
                ?>
                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/workout/monthly/3.png") . '"><img src="/php/project3/images/workout/monthly/3.png"> </a>';
                ?>

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/2.png") . '"><img src="/php/project3/images/challenges/2.png"> </a>';
                ?>



            </div>

            <h2 class="challenges-sub-headings">ONE MONTH STRENGHT TRANING</h2>
            <div class="challenges">

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/workout/monthly/3.png") . '"><img src="/php/project3/images/workout/monthly/3.png"> </a>';
                ?>

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/2.png") . '"><img src="/php/project3/images/challenges/2.png"> </a>';
                ?>


                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/4.png") . '"><img src="/php/project3/images/challenges/4.png"> </a>';
                ?>

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/2.png") . '"><img src="/php/project3/images/challenges/2.png"> </a>';
                ?>


                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/4.png") . '"><img src="/php/project3/images/challenges/4.png"> </a>';
                ?> <?php
                    echo '<a href="download.php?file=' . urlencode("../project3/images/workout/monthly/3.png") . '"><img src="/php/project3/images/workout/monthly/3.png"> </a>';
                    ?>

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/2.png") . '"><img src="/php/project3/images/challenges/2.png"> </a>';
                ?>


                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/4.png") . '"><img src="/php/project3/images/challenges/4.png"> </a>';
                ?>

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/2.png") . '"><img src="/php/project3/images/challenges/2.png"> </a>';
                ?>


                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/4.png") . '"><img src="/php/project3/images/challenges/4.png"> </a>';
                ?>

            </div>

            <h2 class="challenges-sub-headings">TWO WEEK CORE WORKOUT</h2>
            <div class="challenges">

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/workout/monthly/3.png") . '"><img src="/php/project3/images/workout/monthly/3.png"> </a>';
                ?>

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/1.png") . '"><img src="/php/project3/images/challenges/1.png"> </a>';
                ?>

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/2.png") . '"><img src="/php/project3/images/challenges/2.png"> </a>';
                ?>

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/3.png") . '"><img src="/php/project3/images/challenges/3.png"> </a>';
                ?>

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/4.png") . '"><img src="/php/project3/images/challenges/4.png"> </a>';
                ?>
                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/1.png") . '"><img src="/php/project3/images/challenges/1.png"> </a>';
                ?>

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/2.png") . '"><img src="/php/project3/images/challenges/2.png"> </a>';
                ?>

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/3.png") . '"><img src="/php/project3/images/challenges/3.png"> </a>';
                ?>

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/4.png") . '"><img src="/php/project3/images/challenges/4.png"> </a>';
                ?>

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/5.png") . '"><img src="/php/project3/images/challenges/5.png"> </a>';
                ?>

            </div>

            <h2 class="challenges-sub-headings">CALISTHENICS BEGINNER</h2>
            <div class="challenges">

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/workout/monthly/3.png") . '"><img src="/php/project3/images/workout/monthly/3.png"> </a>';
                ?>

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/2.png") . '"><img src="/php/project3/images/challenges/2.png"> </a>';
                ?>


                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/4.png") . '"><img src="/php/project3/images/challenges/4.png"> </a>';
                ?>

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/2.png") . '"><img src="/php/project3/images/challenges/2.png"> </a>';
                ?>


                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/4.png") . '"><img src="/php/project3/images/challenges/4.png"> </a>';
                ?>

            </div>

            <h2 class="challenges-sub-headings">CALISTHENICS ADVANCE</h2>
            <div class="challenges">

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/workout/monthly/3.png") . '"><img src="/php/project3/images/workout/monthly/3.png"> </a>';
                ?>

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/2.png") . '"><img src="/php/project3/images/challenges/2.png"> </a>';
                ?>


                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/4.png") . '"><img src="/php/project3/images/challenges/4.png"> </a>';
                ?>

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/2.png") . '"><img src="/php/project3/images/challenges/2.png"> </a>';
                ?>


                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/4.png") . '"><img src="/php/project3/images/challenges/4.png"> </a>';
                ?> <?php
                    echo '<a href="download.php?file=' . urlencode("../project3/images/workout/monthly/3.png") . '"><img src="/php/project3/images/workout/monthly/3.png"> </a>';
                    ?>

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/2.png") . '"><img src="/php/project3/images/challenges/2.png"> </a>';
                ?>


                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/4.png") . '"><img src="/php/project3/images/challenges/4.png"> </a>';
                ?>

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/2.png") . '"><img src="/php/project3/images/challenges/2.png"> </a>';
                ?>


                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/4.png") . '"><img src="/php/project3/images/challenges/4.png"> </a>';
                ?> <?php
                    echo '<a href="download.php?file=' . urlencode("../project3/images/workout/monthly/3.png") . '"><img src="/php/project3/images/workout/monthly/3.png"> </a>';
                    ?>

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/2.png") . '"><img src="/php/project3/images/challenges/2.png"> </a>';
                ?>


                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/4.png") . '"><img src="/php/project3/images/challenges/4.png"> </a>';
                ?>

                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/2.png") . '"><img src="/php/project3/images/challenges/2.png"> </a>';
                ?>


                <?php
                echo '<a href="download.php?file=' . urlencode("../project3/images/challenges/4.png") . '"><img src="/php/project3/images/challenges/4.png"> </a>';
                ?>

            </div>


        </div>

    </div>
    <!-- ---------------------------------------- -->



    <!-- ---------------------------------------- -->
    <!-- plans/ second -->
    <div id="plans" class="container-fluid second">

        <!-- screen cover -->
        <div class="screen-cover"></div>

        <!-- data form -->
        <div class="data-form-container">

            <!-- close form -->
            <div class="close-form">X</div>

            <!-- heading -->
            <h5 class="data-form-heading">Get Recommended Plan</h5>

            <!-- form -->
            <form method="POST">


                <div class="form-group col-11 container">
                    <label for="">
                        Enter Height(cm)
                    </label>
                    <input type="text" name="height" id="height" class="form-control">
                </div>

                <div class="form-group col-11 container">
                    <label for="">
                        Age(Yrs)
                    </label>
                    <input type="text" name="age" id="age" class="form-control">
                </div>

                <div class="form-group col-11 container">
                    <label for="">
                        Weight(Kg)
                    </label>
                    <input type="text" name="weight" id="weight" class="form-control">
                </div>

                <button class="btn btn-block col-8 container" name="getPlanButton" id="getPlanButton">Get Plan </button>
            </form>

        </div>


        <!-- loss/gain/recommended buttons -->
        <ul class="ul-2">
            <li class="li-2"><span id="fetchRecommended">Recommended</span></li>
        </ul>



        <!-- plans -->
        <div id="plans-container" class="plans-container">

        </div>

    </div>
    <!-- ---------------------------------------- -->



    <!-- ---------------------------------------- -->
    <!-- videos / third -->
    <div id="videos" class="third">
        <div class="row videos-row p-0 m-0">

            <!-- content -->
            <div class="col-2 p-0 m-0">

                <div class=" content-container p-0 m-0">
                    <h2 class="my-3 ml-0">Exercises</h2>
                    <a id="pushup" class="left-content text-white">PushUp</a>
                    <a id="pullup" class="left-content text-white">PullUp</a>
                    <a class="left-content text-white">ChinUp</a>
                    <a class="left-content text-white">Plank</a>
                    <a class="left-content text-white">BenchPress</a>
                    <a class="left-content text-white">Inclined
                        BenchPress</a>
                    <a class="left-content text-white">Declined
                        BenchPress</a>
                    <a class="left-content text-white">Dumble Row</a>
                    <a class="left-content text-white">Lat Pulldown</a>
                    <a class="left-content text-white">Reverse Lat
                        Pulldown
                    </a>
                    <a class="left-content text-white">Skull Crusher</a>
                    <a class="left-content text-white">T Bar</a>
                    <a class="left-content text-white">Muscle Up</a>
                    <a class="left-content text-white">Planch</a>
                    <a class="left-content text-white">BarbellPress</a>
                    <a class="left-content text-white">BarbellPress</a>
                    <a class="left-content text-white">BarbellPress</a>
                    <a class="left-content text-white">BarbellPress</a>
                    <a class="left-content text-white">BarbellPress</a>
                    <a class="left-content text-white">BarbellPress</a>
                    <a class="left-content text-white">BarbellPress</a>
                    <a class="left-content text-white">BarbellPress</a>
                    <a class="left-content text-white">BarbellPress</a>
                    <a class="left-content text-white">BarbellPress</a>
                </div>

            </div>

            <!-- videos -->
            <div class="col-10 p-0 m-0">
                <h2 class="my-3 ml-5 
                ">Video Explanation</h2>
                <div class="video-container">
                </div>
            </div>

        </div>
    </div>
    <!--|||||||||||||||||||||||||||||||-->



    <!-- ---------------------------------------- -->
    <!-- counter / fifth -->
    <div id="counter" class="container-fluid fifth">

        <div class="calculator">
            <!-- heading -->
            <h5 class="calculator-heading">BMI CALCULATOR</h5>

            <!-- form -->
            <form method="POST">


                <div class="form-group col-11 container">
                    <label for="">
                        Enter Height(cm)
                    </label>
                    <input type="text" name="height" id="height" class="form-control">
                </div>

                <div class="form-group col-11 container">
                    <label for="">
                        Age(Yrs)
                    </label>
                    <input type="text" name="age" id="age" class="form-control">
                </div>

                <div class="form-group col-11 container">
                    <label for="">
                        Weight(Kg)
                    </label>
                    <input type="text" name="weight" id="weight" class="form-control">
                </div>


                <button class="btn btn-block col-8 container" name="getPlanButton" id="getPlanButton">Calculate BMI</button>
            </form>

        </div>

    </div>
    <!-- ---------------------------------------- -->









    <!-- js for form/cover/recommended Plan -->
    <script>
        $("#fetchRecommended").click(function() {
            $(".screen-cover").fadeIn();
            $(".data-form-container").slideDown("slow");
            $("body").css("overflowY", "hidden");
            $(".search-plan").hide();
        });

        $(".close-form").click(function() {
            $(".screen-cover").hide();
            $(".data-form-container").hide();
            $("body").css("overflowY", "scroll");
        });

        $("#getPlanButton").click(function(e) {
            e.preventDefault();
            $(".screen-cover").hide();
            $(".data-form-container").hide();
            $("body").css("overflowY", "scroll");

            $.ajax({
                url: '/php/project3/includes/recommendedWorkout.php',
                timeout: 3000,
                success: function(data) {
                    $('#plans-container').html(data);
                }
            })

            setTimeout(function() {
                $('.full-cover').slideUp("slow");
            }, 2000);
        });
    </script>
    <!-- ajax for plans -->
    <script>
        $(document).ready(function() {
            $.ajax({
                url: '/php/project3/includes/workouts.php',
                success: function(data) {
                    $('#plans-container').html(data);
                }
            })

            setTimeout(function() {
                $('.full-cover').slideUp("slow");
            }, 1000);

        });
    </script>
    <!-- ajax for videos -->
    <script>
        $("#pushup").click(function() {

            $.ajax({
                url: '/php/project3/includes/pushup.php',
                success: function(data) {
                    $('.video-container').html(data);
                }
            })

            setTimeout(function() {
                $('.full-cover').slideUp("slow");
            }, 1000);

        });
        $("#pullup").click(function() {

            $.ajax({
                url: '/php/project3/includes/pullup.php',
                success: function(data) {
                    $('.video-container').html(data);
                }
            })

            setTimeout(function() {
                $('.full-cover').slideUp("slow");
            }, 1000);

        });
    </script>
    <!-- js for main animaion -->
    <script>
        setInterval(function() {
            percent = 30;
            $("#gaugeCPU").attr("percent", percent);
            $("#gaugeCPU text.value tspan").text(percent + "%");


            percent = 92;
            $("#gaugeMemory").attr("percent", percent);
            $("#gaugeMemory text.value tspan").text(percent + "%");
        }, 2000);
    </script>
</body>

</html>