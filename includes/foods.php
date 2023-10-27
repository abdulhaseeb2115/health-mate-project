<?php

$foodName = $_GET["foodname"];

switch ($foodName) {
    case "rice": {
            echo '<div id="rice">
        <img class="food-pic" src="/php/project3/images/food/rice.png" alt="pic" style="height: 400px;width:400px;border-radius:6px; z-index:999; ">
    </div>';
            break;
        }

    case "salad": {
            echo '<img id="salad" class="food-pic" src="/php/project3/images/food/salad.png" alt="pic" style="height: 400px;width:400px;border-radius:6px ; z-index:999; ">
';
            break;
        }

    case "tea": {
            echo '<img id="tea" class="food-pic" src="/php/project3/images/food/tea.png" alt="pic" style="height: 400px;width:400px;border-radius:6px ; z-index:999; ">';
            break;
        }

    case "coffee": {
            echo '<img id="coffee" class="food-pic" src="/php/project3/images/food/coffee.png" alt="pic" style="height: 400px;width:400px;border-radius:6px ; z-index:999; ">
';
            break;
        }

    case "apple": {
            echo '<img id="apple" class="food-pic" src="/php/project3/images/food/apple.png" alt="pic" style="height: 400px;width:400px;border-radius:6px ; z-index:999; ">
';
            break;
        }

    case "milk": {
            echo '<img id="milk" class="food-pic" src="/php/project3/images/food/milk.png" alt="pic" style="height: 400px;width:400px;border-radius:6px ; z-index:999; ">';
            break;
        }

    default: {
            echo '<h2 class="text-white">NOT FOUND</h2>';
        }
}
