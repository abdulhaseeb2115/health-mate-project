<?php
$title = "Social";
$socialActive = " active";
include("./includes/head.php");
?>

<style>
    * {
        padding: 0%;
        margin: 0%;
    }

    body {
        box-sizing: border-box;
        padding: 0px;
        margin: 0px;
        overflow: hidden;
    }

    .main-container {
        padding: 0px;
        margin: 0px;
        height: 90vh;
        width: 100%;
        background-image: url('./images/socialBack.jfif');
        background-position: center;
        background-size: 100%;
        background-repeat: no-repeat;
    }

    .main-container::before {
        content: '';
        top: 0;
        left: 0;
        position: absolute;
        height: 100%;
        width: 100%;
        background-color: #a4508b;
        background-image: linear-gradient(326deg, #a4508b 0%, #5f0a87 74%);
        opacity: 0.5;
        z-index: 0;
    }

    .navbar {
        z-index: 99999;
    }

    .row-container {
        height: 100%;
        width: 100%;
    }

    .left-col {
        height: 90vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-around;
        flex-direction: column;
        border-right: 2px solid blue;
    }

    .buttons {
        color: white;
        width: 140px;
        text-align: left;
    }

    .buttons:hover {
        text-decoration: none;
        color: black;
    }

    .right-col {
        height: 100%;
        width: 100%;
        overflow-y: auto;
    }

    .box {
        overflow-y: auto;
        height: 90vh;
    }

    .box img {
        height: 100%;
        width: 100%;
    }
</style>

<body>

    <div class="main-container p-0 m-0">
        <div class="row m-0 p-0 row-container">

            <!-- col-2 -->
            <div class="col-2 p-0 m-0">

                <div class="left-col">
                    <a href="" class="buttons ns font-italic font-weight-bold " style="color: black;"><i class="fas fa-newspaper "></i> NewsFeed</a>

                    <a href="" class="buttons"><i class="fas fa-users  gp"></i> Groups</a>

                    <a href="" class="buttons"><i class="fa fa-comments "></i> Chats</a>

                    <a href="" class="buttons"><i class="fas fa-image "></i> My Uploads</a>

                    <a href="" class="buttons"><i class="far fa-hand-rock "></i> Competitions</a>

                    <a href="" class="buttons"><i class="fas fa-poll "></i> Results</a>
                </div>

            </div>

            <!-- col-10 -->
            <div class="col-10 p-0 m-0">

                <div class=" right-col">

                    <div class="newsfeed box">
                        <div class="card p-0 col-6 container my-5">
                            <div class=" card-header bg-dark text-white">
                                Dwyane Johnson
                                <small class="ml-5 pl-5">25/11/2021</small>
                            </div>
                            <div class="card-body p-5">
                                <img src="./images/ns1.png" alt="">
                            </div>
                        </div>
                        <div class="card p-0 col-6 container my-5">
                            <div class=" card-header bg-dark text-white">
                                Hamza Khalil
                                <small class="ml-5 pl-5">26/10/2019</small>
                            </div>
                            <div class="card-body p-5">
                                <img src="./images/ns2.png" alt="">
                            </div>
                        </div>
                    </div>


                    <div class="groups box">

                        <div class="card p-0 col-6 container my-5">
                            <div class=" card-header bg-dark text-white">
                                EXTREME WORKOUTS
                            </div>
                            <div class="card-body p-5">
                                <img src="./images/ns1.png" alt="">
                            </div>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>


    <script>
        $(".ns").click(function() {
            $(".groups").hide();
            $(".ns").show();
        });

        $(".gp").click(function() {
            alert();
            $(".ns").hide();
            $(".groups").show();
        });
    </script>


</body>

</html>