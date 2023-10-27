<style>
    /* default */
    body {
        padding: 0px;
        margin: 0px;
    }

    /* main container */
    .lossPlans {
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

    .lossImg {
        height: 150px;
        margin: 10px 13px;
    }

    .lossImg img {
        border-radius: 8px;
        height: 100%;
    }

    .heading-loss {
        font-family: "Montserrat";
        color: white;
        padding: 10px 0px 20px 20px;
    }
</style>


<div class="lossPlans">

    <h3 class="heading-loss">Best Loss Plans</h3>
    <div class="plans">
        <!-- cover -->
        <div class="full-cover"></div>


        <div class="lossImg">
            <?php
            echo '<a href="download.php?file=' . urlencode("../project3/images/loss/1.jpg") . '"><img src="/php/project3/images/loss/1.jpg"> </a>';
            ?>
        </div>

        <div class="lossImg">
            <?php
            echo '<a href="download.php?file=' . urlencode("../project3/images/loss/2.jpg") . '"><img src="/php/project3/images/loss/2.jpg"> </a>';
            ?>
        </div>

        <div class="lossImg">
            <?php
            echo '<a href="download.php?file=' . urlencode("../project3/images/loss/3.png") . '"><img src="/php/project3/images/loss/3.png"> </a>';
            ?>
        </div>

        <div class="lossImg">
            <?php
            echo '<a href="download.php?file=' . urlencode("../project3/images/loss/4.jpg") . '"><img src="/php/project3/images/loss/4.jpg"> </a>';
            ?>
        </div>

        <div class="lossImg">
            <?php
            echo '<a href="download.php?file=' . urlencode("../project3/images/loss/5.jpg") . '"><img src="/php/project3/images/loss/5.jpg"> </a>';
            ?>
        </div>

        <div class="lossImg">
            <?php
            echo '<a href="download.php?file=' . urlencode("../project3/images/loss/6.png") . '"><img src="/php/project3/images/loss/6.png"> </a>';
            ?>
        </div>

        <div class="lossImg">
            <?php
            echo '<a href="download.php?file=' . urlencode("../project3/images/loss/7.jpg") . '"><img src="/php/project3/images/loss/7.jpg"> </a>';
            ?>
        </div>

        <div class="lossImg">
            <?php
            echo '<a href="download.php?file=' . urlencode("../project3/images/loss/8.gif") . '"><img src="/php/project3/images/loss/8.gif"> </a>';
            ?>
        </div>

        <div class="lossImg">
            <?php
            echo '<a href="download.php?file=' . urlencode("../project3/images/loss/9.png") . '"><img src="/php/project3/images/loss/9.png"> </a>';
            ?>
        </div>

        <div class="lossImg">
            <?php
            echo '<a href="download.php?file=' . urlencode("../project3/images/loss/10.jpg") . '"><img src="/php/project3/images/loss/10.jpg"> </a>';
            ?>
        </div>
        <!-- ______________ -->
        <div class="lossImg">
            <?php
            echo '<a href="download.php?file=' . urlencode("../project3/images/loss/1.jpg") . '"><img src="/php/project3/images/loss/1.jpg"> </a>';
            ?>
        </div>

        <div class="lossImg">
            <?php
            echo '<a href="download.php?file=' . urlencode("../project3/images/loss/2.jpg") . '"><img src="/php/project3/images/loss/2.jpg"> </a>';
            ?>
        </div>

        <div class="lossImg">
            <?php
            echo '<a href="download.php?file=' . urlencode("../project3/images/loss/3.png") . '"><img src="/php/project3/images/loss/3.png"> </a>';
            ?>
        </div>

        <div class="lossImg">
            <?php
            echo '<a href="download.php?file=' . urlencode("../project3/images/loss/4.jpg") . '"><img src="/php/project3/images/loss/4.jpg"> </a>';
            ?>
        </div>

        <div class="lossImg">
            <?php
            echo '<a href="download.php?file=' . urlencode("../project3/images/loss/5.jpg") . '"><img src="/php/project3/images/loss/5.jpg"> </a>';
            ?>
        </div>

        <div class="lossImg">
            <?php
            echo '<a href="download.php?file=' . urlencode("../project3/images/loss/6.png") . '"><img src="/php/project3/images/loss/6.png"> </a>';
            ?>
        </div>
    </div>
</div>