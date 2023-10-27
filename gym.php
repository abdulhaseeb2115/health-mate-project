<?php
$title = "Gym";
$gymActive = " active";
include("./includes/head.php");
?>



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
        background-color: #23074d;
        border-radius: 6px;
        z-index: 1111;
        width: 250px;
        color: black;
        position: absolute;
        top: 80%;
        left: 17%;
        opacity: 0.8;
    }

    .carousel-text small {
        color: white;
        font-weight: bold;
    }
</style>
<!--|||||||||||||||||||||||||||||||-->




<!-- css -->
<style>
    * {
        padding: 0px;
        margin: 0px;
    }

    body {
        padding: 0px;
        margin: 0px;
        overflow-x: hidden;
    }

    /* gym */
    .gym {
        position: relative;
        height: 100vh;
        display: flex;
        flex-direction: column;
        background-image: url('./images/gym4.jpg');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .gym::before {
        content: '';
        background: #23074d;
        background: -webkit-linear-gradient(to right, #cc5333, #23074d);
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        opacity: 0.5;
    }

    /* heading */
    .trending-heading {
        font-family: "Montserrat";
        color: white;
        font-size: 3.5rem;
        align-self: center;
        margin-top: 200px;
        margin-bottom: 100px;
        z-index: 999;
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

    /* ||||||||||||||||||||||||||||||||| */
    /* city gym */
    .city-gym {
        height: 100vh;
        width: 100%;
        padding: 0px;
        margin: 0px;
        position: relative;
        background-image: url('./images/map1.png');
        background-position: center -900px;
        background-size: 100%;
        background-repeat: no-repeat;
    }

    .city-gym::before {
        content: '';
        background: #23074d;
        background: -webkit-linear-gradient(to right, #cc5333, #23074d);
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        opacity: 0.6;
        z-index: 0;
    }

    /* search gym */
    .search-city {
        align-self: flex-start;
        justify-self: left;
        z-index: 1;
        position: relative;
        padding: 30px 0px 0px 30px;
    }

    .search-city label {
        font-family: "Montserrat";
        color: white;
        margin-bottom: 5px;
        margin-top: 10px;
        font-size: 1.5rem;
        z-index: 1;
    }

    .fetched-gym-container {
        height: 50%;
        width: 50%;
        margin: 100px 0px 0px 400px;
        display: flex;
        align-items: center;
        justify-content: space-around;
        z-index: 9999;
        position: relative;
    }

    .fetched-gym {
        position: relative;
        z-index: 9999;
    }

    .not-found {
        color: white;
        margin: 50px;
    }
</style>




<body>

    <!-- gyms -->
    <div id="gyms" class="container-fluid gym">

        <h1 class="trending-heading">Registered Gyms</h1>

        <!-- carousel -->
        <div class="container text-center carousel-container">

            <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">

                <div class="carousel-inner w-100" role="listbox">

                    <div class="carousel-item active">

                        <div class="col-md-4">
                            <img class="img-fluid" src="../project3/images/gym/gym1.PNG">

                            <div class="carousel-text text-white">
                                <small> Park Road, Chak Shehzad, Islamabad</small>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="col-md-4">
                            <img class="img-fluid" src="../project3/images/gym/gym2.PNG">

                            <div class="carousel-text text-white">
                                <small> Park Road, Chak Shehzad, Islamabad</small>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="col-md-4">
                            <img class="img-fluid" src="../project3/images/gym/gym3.PNG">

                            <div class="carousel-text text-white">
                                <small> Park Road, Chak Shehzad, Islamabad</small>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="col-md-4">
                            <img class="img-fluid" src="../project3/images/gym/gym4.PNG">

                            <div class="carousel-text text-white">
                                <small> Park Road, Chak Shehzad, Islamabad</small>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="col-md-4">
                            <img class="img-fluid" src="../project3/images/gym/gym5.PNG">

                            <div class="carousel-text text-white">
                                <small> Park Road, Chak Shehzad, Islamabad</small>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="col-md-4">
                            <img class="img-fluid" src="../project3/images/gym/gym3.PNG">

                            <div class="carousel-text text-white">
                                <small> Park Road, Chak Shehzad, Islamabad</small>
                            </div>
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



    <!-- gyms in city -->
    <div class="container-fluid city-gym">
        <!-- search food -->
        <div class="search-city">
            <form action="#" method="post">

                <div class="form-group d-inline-block">
                    <label for="">Gyms In My City?</label>
                    <input type="text" name="cityName" id="cityName" class="form-control">
                </div>

                <button id="fetchGym" type="submit" class="btn btn-secondary bg-transparent ml-1 mb-1">Search</button>
            </form>
        </div>



        <!-- fetched gym -->
        <div class="fetched-gym-container">
            <!-- fetched gym -->
            <div class="fetched-gym">

            </div>

        </div>



    </div>






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
    <!-- ajax for cityGym -->
    <script>
        $("#fetchGym").click(function(e) {
            e.preventDefault();

            var cityName = $("#cityName").val();
            $.ajax({
                url: `/php/project3/includes/gymCity.php?cityName=${cityName}`,
                success: function(data) {
                    $('.fetched-gym-container').html(data);
                }
            })
        });
    </script>
</body>

</html>