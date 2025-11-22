<?php
foreach (scandir(".git") as $f) {
    echo $f . "<br>";
}
?>
