<?php

$cityName = $_GET["cityName"];

switch ($cityName) {
    case "islamabad": {
            echo '<div">
            <a target="blank" href="https://kinetixgym.com/"><img class="food-pic m-3" src="/php/project3/images/gym/gym1.PNG" alt="pic" style="height: 200px;width:200px;border-radius:6px; z-index:999; "></a>
    </div>
    <div >
    <a target="blank" href="https://kinetixgym.com/"><img class="food-pic m-3" src="/php/project3/images/gym/gym2.PNG" alt="pic" style="height: 200px;width:200px;border-radius:6px; z-index:999; "></a>
    </div>';
            break;
        }

    case "rawalpindi": {
            echo '<div">
        <a target="blank" href="https://kinetixgym.com/"><img class="food-pic m-3" src="/php/project3/images/gym/gym3.PNG" alt="pic" style="height: 200px;width:200px;border-radius:6px; z-index:999; "></a>
</div>
';
            break;
        }

    case "lahore": {
            echo '<div">
        <a target="blank" href="https://kinetixgym.com/"><img class="food-pic m-3" src="/php/project3/images/gym/gym4.PNG" alt="pic" style="height: 200px;width:200px;border-radius:6px; z-index:999; "></a>
</div>';
            break;
        }


    default: {
            echo '<h2 class="not-found">NO GYM FOUND</h2>';
        }
}
