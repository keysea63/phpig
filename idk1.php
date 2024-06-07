

<?php
    $foods = array("apple","orange","coconut");
    array_push($foods, "kiwi","pineapple");
    $new = array_reverse($foods);
    foreach($new as $food){
        echo $food . "<br>";

    }
   ?>