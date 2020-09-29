<?php

if(isset($_POST['title']) && isset($_POST['date']) && isset($_POST['content']) && isset($_POST['author'])) {

    $myFile = fopen("includes/comments.json", "a") or die ("this does not work now");
    $writeInFile1 = "<br>Title:</br>" . $_POST['title'] . "<br>";
    $writeInFile2 = "<br>Current date:</br>" . $_POST['date'] . "<br>";
    $writeInFile3 = "<br>Your message:</br>" . $_POST['content'] . "<br>";
    $writeInFile4 = "<br>By:</br>" . $_POST['author'] . "<hr>";
    fwrite($myFile, $writeInFile1);
    fwrite($myFile, $writeInFile2);
    fwrite($myFile, $writeInFile3);
    fwrite($myFile, $writeInFile4);
    fclose($myFile);
}

include("includes/comments.html");
