<style>
    /* default */
    body {
        padding: 0px;
        margin: 0px;
    }

    /* main container */
    .recomendedPlans {
        padding: 20px;
        margin: 0px;
        height: 100%;
        width: 100%;
        background-color: rgb(31, 20, 91, 0.6);
        overflow-y: auto;
        overflow-x: hidden;
        border-radius: 20px;
    }

    /* cover */
    .full-cover {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0%;
        left: 0%;
        background-color: rgb(31, 20, 91);
        z-index: 999;
    }

    /* sub container */
    .plans {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }

    .recomendedImg {
        height: 150px;
        margin: 10px 13px;
    }

    .recomendedImg img {
        border-radius: 8px;
        height: 100%;
    }

    .heading-recomended {
        font-family: "Montserrat";
        color: white;
        padding: 10px 0px 20px 20px;
    }
</style>


<div class="recomendedPlans">

    <h3 class="heading-recomended">Recommended Plans</h3>
    <div class="plans">
        <!-- cover -->
        <div class="full-cover"></div>


        <div class="recomendedImg">
            <?php
            echo '<a href="download.php?file=' . urlencode("../project3/images/loss/1.jpg") . '"><img src="/php/project3/images/loss/1.jpg"> </a>';
            ?>
        </div>

        <div class="recomendedImg">
            <?php
            echo '<a href="download.php?file=' . urlencode("../project3/images/loss/4.jpg") . '"><img src="/php/project3/images/loss/4.jpg"> </a>';
            ?>
        </div>

    </div>
</div>