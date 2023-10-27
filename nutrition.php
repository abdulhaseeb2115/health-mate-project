<?php
$title = "Nutrition";
$nutritionActive = " active";
include("./includes/head.php");
?>


<!-- chart -->
<style>
    .bar-graph {
        color: white;
        padding-top: 150px;
        width: 49%;
        margin-left: -380px;
    }

    .bar-container {
        width: 350px;
        height: 50px;
        padding: 0px;
        margin: 5px;
        padding-top: 8px;
    }

    .bar {
        width: 0px;
        text-align: center;
        margin: 4px;
        border-radius: 3px;
        position: relative;
        left: 30%;
        height: 35px;
        padding-top: 3px;
    }

    .day {
        animation: fade-in-text 2.2s 0.1s forwards;
        position: relative;
        left: 0%;
        bottom: 90%;
    }

    .bar::after {
        animation: fade-in-text 2.2s 0.1s forwards;
        color: #fff;
        content: attr(data-percentage);
        font-weight: 700;
    }

    .bar-graph .bar-1 .bar {
        background-color: #BF9CFF;
        animation: show-bar-1-vertical 2.2s 0.1s forwards;
    }

    .bar-graph .bar-2 .bar {
        background-color: #A274F8;
        animation: show-bar-2-vertical 2.2s 0.2s forwards;
    }

    .bar-graph .bar-3 .bar {
        background-color: #8953EC;
        animation: show-bar-3-vertical 2.2s 0.3s forwards;
    }

    .bar-graph .bar-4 .bar {
        background-color: #773DE0;
        animation: show-bar-4-vertical 2.2s 0.4s forwards;
    }

    .bar-graph .bar-5 .bar {
        background-color: #682ED3;
        animation: show-bar-5-vertical 2.2s 0.4s forwards;
    }

    .bar-graph .bar-6 .bar {
        background-color: #581BC7;
        animation: show-bar-6-vertical 2.2s 0.4s forwards;
    }

    .bar-graph .bar-7 .bar {
        background-color: #581BC7;
        animation: show-bar-7-vertical 2.2s 0.4s forwards;
    }

    /* Bar Graph Vertical Animations */
    @keyframes show-bar-1-vertical {
        0% {
            width: 0;
        }

        100% {
            width: 40%;
        }
    }

    @keyframes show-bar-2-vertical {
        0% {
            width: 0;
        }

        100% {
            width: 55%;
        }
    }

    @keyframes show-bar-3-vertical {
        0% {
            width: 0;
        }

        100% {
            width: 68%;
        }
    }

    @keyframes show-bar-4-vertical {
        0% {
            width: 0;
        }

        100% {
            width: 82%;
        }
    }

    @keyframes show-bar-5-vertical {
        0% {
            width: 0;
        }

        100% {
            width: 60%;
        }
    }

    @keyframes show-bar-6-vertical {
        0% {
            width: 0;
        }

        100% {
            width: 39%;
        }
    }

    @keyframes show-bar-7-vertical {
        0% {
            width: 0;
        }

        100% {
            width: 98%;
        }
    }

    @keyframes fade-in-text {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }
</style>
<!--|||||||||||||||||||||||||||||||-->

<!-- carousel -->
<style>
    @media (max-width: 768px) {
        .carousel-inner .carousel-item>div {
            display: none;
        }

        .carousel-inner .carousel-item>div:first-child {
            display: block;
        }
    }

    .carousel-inner .carousel-item.active,
    .carousel-inner .carousel-item-next,
    .carousel-inner .carousel-item-prev {
        display: flex;
    }

    /* display 3 */
    @media (min-width: 768px) {

        .carousel-inner .carousel-item-right.active,
        .carousel-inner .carousel-item-next {
            transform: translateX(33.333%);
        }

        .carousel-inner .carousel-item-left.active,
        .carousel-inner .carousel-item-prev {
            transform: translateX(-33.333%);
        }
    }

    .carousel-inner .carousel-item-right,
    .carousel-inner .carousel-item-left {
        transform: translateX(0);
    }

    .col-md-4 {
        height: 180px;
        padding: 0px;
        margin: 0px;
    }

    .img-fluid {
        height: 100%;
        width: 300px;
        padding: 0px;
        margin: 0px;
        z-index: 100;
        border-radius: 6px;
    }

    .carousel-text {
        background-color: rgb(193, 193, 193);
        border-radius: 6px;
        z-index: 1111;
        width: 250px;
        color: black;
        position: absolute;
        top: 70%;
        left: 17%;
        opacity: 0.5;
    }
</style>
<!--|||||||||||||||||||||||||||||||-->

<!-- scroll -->
<style>
    /* width */
    .lossPlans::-webkit-scrollbar,
    .gainPlans::-webkit-scrollbar {
        width: 10px;
    }

    /* Track */
    .lossPlans::-webkit-scrollbar-track,
    .gainPlans::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Handle */
    .lossPlans::-webkit-scrollbar-thumb,
    .gainPlans::-webkit-scrollbar-thumb {
        background: #888;
    }

    /* Handle on hover */
    .gainPlans::-webkit-scrollbar-thumb:hover,
    .lossPlans::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
</style>
<!--|||||||||||||||||||||||||||||||-->


<!-- css -->
<style>
    /* main page */
    html {
        scroll-behavior: smooth;
    }

    .main {
        height: 90vh;
        width: 100%;
        display: flex;
        background-image: url('./images/food_00000.jpg');
        background-position: center -25px;
        background-size: cover;
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
        font-size: 1.5rem;
    }

    /* ||||||||||||||||||||||||||||||||||||||||| */


    /* second */
    .second {
        position: relative;
        height: 100vh;
        width: 100%;
        background-image: url('./images/gym1.jpg');
        background-position: center;
        background-size: 100%;
        background-repeat: no-repeat;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .second::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-color: #a4508b;
        background-image: linear-gradient(326deg, #a4508b 0%, #5f0a87 74%);
        opacity: 0.3;
    }

    .ul-2 {
        padding: 0px;
        margin: 0px;
        list-style-type: none;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        height: 100%;
        width: fit-content;

    }

    .li-2 {
        font-size: 25px;
        width: 250px;
        height: 50px;
        color: white;
        border-left: 0.08em solid;
        border-radius: 6px;
        position: relative;
        cursor: pointer;
        margin: 50px 0px;
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
        height: 80%;
        width: 75%;
        position: relative;
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
        position: relative;
        height: 100vh;
        width: 100%;
        display: flex;
        flex-direction: column;
        background-image: url('./images/nutrition 3.jpg');
        background-position: center;
        background-size: 100%;
        background-repeat: no-repeat;
    }

    .third::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-color: #a4508b;
        background-image: linear-gradient(326deg, #a4508b 0%, #5f0a87 74%);
        opacity: 0.3;
    }


    /* fetched food */
    .fetched-food-container {
        z-index: 200;
        position: fixed;
        top: 13%;
        left: 30%;
        height: 75%;
        width: 40%;
        border-radius: 10px;
        padding: 50px 30px;
        display: none;
        z-index: 999;
    }

    /* fetched food image */
    .fetched-food-image {
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 9999;
    }

    /* close fetched food */
    .close-fetched-food {
        position: absolute;
        top: 4%;
        right: 3%;
        padding: 3px 10px;
        border: 1px solid rgb(255, 255, 255, 0.5);
        border-radius: 6px;
        color: white;
        cursor: pointer;
    }

    .close-fetched-food:hover {
        border: 1px solid rgb(255, 255, 255);
    }

    /* search food */
    .search-food {
        align-self: flex-start;
        justify-self: left;
        padding-top: 15px;
        padding-left: 25px;
        z-index: 999;

    }

    .search-food label {
        font-family: "Montserrat";
        color: white;
        margin-bottom: 5px;
        margin-top: 10px;
        font-size: 1.5rem;
    }

    /* heading */
    .trending-heading {
        z-index: 1;
        font-family: "Montserrat";
        color: white;
        font-size: 3.5rem;
        align-self: center;
        margin-top: 100px;
        margin-bottom: 50px;
        width: 600px;
        text-align: center;
    }

    /* carousel */
    .carousel-container {
        justify-self: center;
        align-self: flex-end;
        border: none;
    }

    .carousel-item {
        border: none;
    }

    /* ||||||||||||||||||||||||||||||||||||||||| */
    /* fourth */
    .fourth {
        height: 100vh;
        background-color: #a4508b;
        background-image: linear-gradient(326deg, #a4508b 0%, #5f0a87 74%);

        display: flex;
        align-items: center;
        justify-content: center;
    }

    .calculator {
        width: 30%;
        padding: 40px;
        border-radius: 10px;
        color: white;
        background-color: #ca6702;


    }

    .calculator label {
        font-family: "Ubuntu";
        font-weight: bold;
    }

    .calculator-heading {
        font-size: 1.5rem;
        font-family: "Montserrat";
    }
</style>




<body>
    <!-- main top -->
    <div class="container-fluid main">

        <h2>CALORIE INTAKE HISTORY</h2>

        <!-- chart left-->
        <section class="bar-graph">
            <div class="bar-1 bar-container">
                <div class="bar" data-percentage="40%"></div>
                <span class="day">Monday</span>
            </div>
            <div class="bar-2 bar-container">
                <div class="bar" data-percentage="55%"></div>
                <span class="day">Tuesday</span>
            </div>
            <div class="bar-3 bar-container">
                <div class="bar" data-percentage="68%"></div>
                <span class="day">Wednesday</span>
            </div>
            <div class="bar-4 bar-container">
                <div class="bar" data-percentage="82%"></div>
                <span class="day">Thursday</span>
            </div>
            <div class="bar-5 bar-container">
                <div class="bar" data-percentage="60%"></div>
                <span class="day">Friday</span>
            </div>
            <div class="bar-6 bar-container">
                <div class="bar" data-percentage="39%"></div>
                <span class="day">Saturday</span>
            </div>
            <div class="bar-7 bar-container">
                <div class="bar" data-percentage="98%"></div>
                <span class="day">Sunday</span>
            </div>
        </section>

    </div>
    <!--|||||||||||||||||||||||||||||||-->



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
            <li class="li-2"><span id="fetchLoss">Weight Loss</span></li>
            <li class="li-2"><span id="fetchGain">Weight Gain</span></li>
            <li class="li-2"><span id="fetchRecommended">Recommended</span></li>
        </ul>

        <!-- plans -->
        <div id="plans-container" class="plans-container">
        </div>

    </div>
    <!--|||||||||||||||||||||||||||||||-->



    <!-- food / third -->
    <div id="foods" class="container-fluid third">

        <!-- fetched food -->
        <div class="fetched-food-container">
            <!-- fetched food -->
            <div class="fetched-food">
                <!-- close fetched-food -->
                <div class="close-fetched-food">X</div>

                <div class="fetched-food-image"></div>
            </div>

        </div>

        <!-- search food -->
        <div class="search-food">
            <form action="#" method="post">

                <div class="form-group d-inline-block">
                    <label for="">What is in my food?</label>
                    <input type="text" name="foodName" id="foodName" class="form-control">
                </div>

                <button id="fetchFood" type="submit" class="btn btn-secondary bg-transparent ml-1 mb-1">Search</button>
            </form>
        </div>


        <h1 class="trending-heading">Recommended Foods</h1>

        <!-- carousel -->
        <div class="container text-center carousel-container">

            <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">

                <div class="carousel-inner w-100" role="listbox">

                    <div class="carousel-item active">

                        <div class="col-md-4">
                            <img class="img-fluid" src="../project3/images/food/coffee.PNG">

                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="col-md-4">
                            <img class="img-fluid" src="../project3/images/food/tea.PNG">

                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="col-md-4">
                            <img class="img-fluid" src="../project3/images/food/apple.PNG">

                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="col-md-4">
                            <img class="img-fluid" src="../project3/images/food/milk.PNG">

                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="col-md-4">
                            <img class="img-fluid" src="../project3/images/food/salad.PNG">

                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="col-md-4">
                            <img class="img-fluid" src="../project3/images/food/rice.PNG">

                        </div>
                    </div>


                </div>


                <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>

    </div>
    <!--|||||||||||||||||||||||||||||||-->



    <!-- counter / fourth -->
    <div id="counter" class="container-fluid fourth">

        <div class="calculator">
            <!-- heading -->
            <h5 class="calculator-heading">CALORIE COUNTER</h5>

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

                <h6 class="ml-5 pl-5 text-white">Exercise Routine</h6>
                <div class="form-group col-11 container text-white ml-5">
                    <label for="">
                        30min
                    </label>
                    <input type="radio" name="exercise" id="">

                    <label for="">
                        1hr
                    </label>
                    <input type="radio" name="exercise" id="">

                    <label for="">
                        2hr
                    </label>
                    <input type="radio" name="exercise" id="">

                    <label for="">
                        3hr
                    </label>
                    <input type="radio" name="exercise" id="">

                </div>

                <button class="btn btn-block col-8 container" name="getPlanButton" id="getPlanButton">Count Calories</button>
            </form>

        </div>

    </div>
    <!--|||||||||||||||||||||||||||||||-->









    <!-- js for carousel -->
    <script>
        $('#recipeCarousel').carousel({
            interval: 3000
        })

        $('.carousel .carousel-item').each(function() {
            var minPerSlide = 3;
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (var i = 0; i < minPerSlide; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }

                next.children(':first-child').clone().appendTo($(this));
            }
        });
    </script>
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
                url: '/php/project3/includes/recommended.php',
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
        $(document).ready(
            $("#fetchLoss").click(function() {
                $(".search-plan").hide();
                $.ajax({
                    url: '/php/project3/includes/weightLoss.php',
                    success: function(data) {
                        $('#plans-container').html(data);
                    }
                })

                setTimeout(function() {
                    $('.full-cover').slideUp("slow");
                }, 1000);

            }));

        $(document).ready(
            $("#fetchGain").click(function() {
                $(".search-plan").hide();
                $.ajax({
                    url: '/php/project3/includes/weightGain.php',
                    success: function(data) {
                        $('#plans-container').html(data);
                    }
                })

                setTimeout(function() {
                    $('.full-cover').slideUp("slow");
                }, 1000);

            })
        );
    </script>
    <!-- ajax for food -->
    <script>
        $("#fetchFood").click(function(e) {
            e.preventDefault();
            $('.screen-cover').fadeIn();
            $('.fetched-food-container').slideDown();

            var foodName = $("#foodName").val();
            $.ajax({
                url: `/php/project3/includes/foods.php?foodname=${foodName}`,
                success: function(data) {
                    $('.fetched-food-image').html(data);
                },
                error: function(data) {
                    $('.fetched-food-image').text("Food Not Found");
                }
            })
        });

        $(".close-fetched-food").click(function(e) {
            $('.screen-cover').fadeOut();
            $('.fetched-food-container').slideUp();
        });
    </script>
</body>

</html>