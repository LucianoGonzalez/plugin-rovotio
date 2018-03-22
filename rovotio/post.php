<?php
/**
 * Created by PhpStorm.
 * User: lucgo
 * Date: 14-03-2018
 * Time: 14:49
 */

session_start();
    $text = $_POST['text'];

    $fp = fopen("log.html", 'a');
    fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>Luc</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
    fclose($fp);

?>