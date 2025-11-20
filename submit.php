<?php
$name = $_POST["name"];   // match the input name=""
$email = $_POST["email"];
$track = $_POST["track"];
$shirt = $_POST["shirt"];
$laptop = isset($_POST["laptop"]) ? "yes" : "no";
?>



<?php
setcookie("student_name", $name, time() + 60*60*24*7); // 7 days
setcookie("student_track", $track, time() + 60*60*24*7);
?>



<?php
$line = $name . "," . $email . "," . $track . "," . $shirt . "," . $laptop . "\n";
$file = fopen("registrations.txt", "a");
fwrite($file, $line);
fclose($file);
?>

// THANKS + details.php/home