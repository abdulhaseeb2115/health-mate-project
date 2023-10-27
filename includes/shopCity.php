<?php

$cityName = $_GET["cityName"];

switch ($cityName) {
    case "islamabad": {
            echo '<div">
        <a target="blank" href="https://kinetixgym.com/"><img class="food-pic m-3" src="/php/project3/images/shop/shop2.PNG" alt="pic" style="height: 200px;width:200px;border-radius:6px; z-index:999; "></a>
</div>
<div">
        <a target="blank" href="https://kinetixgym.com/"><img class="food-pic m-3" src="/php/project3/images/shop/shop1.PNG" alt="pic" style="height: 200px;width:200px;border-radius:6px; z-index:999; "></a>
</div>
    ';
            break;
        }

    case "rawalpindi": {
            echo '<div">
        <a target="blank" href="https://kinetixgym.com/"><img class="food-pic m-3" src="/php/project3/images/shop/shop4.PNG" alt="pic" style="height: 200px;width:200px;border-radius:6px; z-index:999; "></a>
</div>
';
            break;
        }

    case "lahore": {
            echo '<div">
        <a target="blank" href="https://kinetixgym.com/"><img class="food-pic m-3" src="/php/project3/images/shop/shop5.PNG" alt="pic" style="height: 200px;width:200px;border-radius:6px; z-index:999; "></a>
</div>';
            break;
        }


    default: {
            echo '<h2 class="not-found">NO SHOP FOUND</h2>';
        }
}
