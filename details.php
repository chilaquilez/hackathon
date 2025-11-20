<?php
$name = $_COOKIE["student_name"] ?? "guest";
$track = $_COOKIE["student_track"] ?? "undecided";
?>

<?php
if (isset($_GET["clear"])) {
  setcookie("student_name", "", time() - 3600);
  setcookie("student_track", "", time() - 3600);
}
?>

<link href="details.php?clear=yes">