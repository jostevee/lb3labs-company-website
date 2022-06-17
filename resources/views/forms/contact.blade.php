<?php 
/* $_POST['email'] = "email@Gmail.com"; */
$data = $_POST['email'];

if (preg_match("/\b(hotmail|gmail|yahoo)\b/i", $data)){
    echo " Found free Email service.";
    exit;
} else {
    echo "No match found for free Email service.";
    exit;
}
