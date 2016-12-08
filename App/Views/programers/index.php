<?php
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 12/6/2016
 * Time: 8:53 AM
 */
print_r($programers);
echo "<br>";
foreach ($programers as $prog) {
    echo $prog->name."<br>";
}