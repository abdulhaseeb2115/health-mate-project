<?php
$title = "Settings";
$settingsActive = " active";
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
        background-color: #923cb5;
        background-image: linear-gradient(147deg, #923cb5 0%, #000000 74%);
    }

    .row-container {
        height: 100%;
        width: 100%;
    }

    .left-col {
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        border-right: 4px solid white;
    }

    .buttons {
        color: white;
        width: 200px;
        text-align: left;
        font-size: 1rem;
        font-family: "Ubuntu";
        margin: 20px 0px;
    }

    .buttons:hover {
        text-decoration: none;
        color: black;
    }

    .right-col {
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
    }

    .password {
        border: 2px solid white;
        border-radius: 10px;
    }

    .pass {
        color: black;
        font-style: italic;
    }
</style>

<body>

    <div class="main-container p-0 m-0">
        <div class="row m-0 p-0 row-container">

            <!-- col-2 -->
            <div class="col-2 p-0 m-0">

                <div class="left-col">
                    <a href="#" class="buttons pass"><i class="fas fa-lock "></i> Change Password</a>
                    <a href="#" class="buttons"><i class="fas fa-trash-alt "></i> Reset Data</a>
                    <a href="#" class="buttons"><i class="fas fa-user-secret "></i> Privacy</a>
                    <a href="../project3/login.php" class="buttons"><i class="fas fa-sign-out-alt "></i> Logout</a>
                </div>

            </div>

            <!-- col-10 -->
            <div class="col-10 p-0 m-0">

                <div class=" right-col">

                    <div class="password container col-10 col-sm-8 col-md-6 col-lg-4 p-3 pt-1">
                        <h5 class="pl-0 mb-3">Change Password</h5>


                        <form action="" method="post">

                            <div class="form-group">
                                <label for="old">ENTER OLD PASSWORD</label>
                                <input type="password" name="old" class="form-control pass">
                            </div>

                            <div class="form-group">
                                <label for="new">ENTER NEW PASSWORD</label>
                                <input type="password" name="new" class="form-control pass">
                            </div>

                            <div class="form-group">
                                <label for="confirm">CONFIRM NEW PASSWORD</label>
                                <input type="password" name="confirm" class="form-control pass">
                            </div>

                            <div id="togglePass" class="col-12 d-flex justify-content-end" style="cursor: pointer;"><a>Show</a></div>
                            <button type="submit" class="btn btn-sm btn-secondary">Update Password</button>
                        </form>



                    </div>


                </div>
            </div>

        </div>
    </div>


    <!-- toggle password -->
    <script>
        $("#togglePass").click(function() {

            if ($("#togglePass a").html() === "Show") {
                $("#togglePass a").html("Hide");
            } else {
                $("#togglePass a").html("Show");
            }
            if ($(".pass").attr("type") === "password") {
                $(".pass").attr("type", "text");
            } else {
                $(".pass").attr("type", "password");
            }

        });
    </script>
</body>

</html>