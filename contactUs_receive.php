<?php

// start at the top of the page since we start a session
date_default_timezone_set('Asia/Calcutta');
$MSG = "=================== ".date("d/m/Y H:i a")." ==========================\n";
$MSG .= "NAME:: ".$_POST['name']."\n";
$MSG .= "EMAIL:: ".$_POST['email']."\n";
$MSG .= "PHONE:: ".$_POST['phone']."\n";
$MSG .= "MESSAGE:: ".$_POST['message']."\n";
$MSG .= "_______________________________________________________________________\n\n\n";

$fn = 'record/msg.txt';
if (($fp = @fopen($fn, 'a')) != false) {
    if (flock($fp, LOCK_EX)) {
        fwrite($fp, $MSG, strlen($MSG));
        flock($fp, LOCK_UN);
    }
    fclose($fp);
}
header("Location: home");
?>
