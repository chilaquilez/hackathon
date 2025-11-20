<?php
$rows = file("registrations.txt", FILE_IGNORE_NEW_LINES);
?>

<?php foreach ($rows as $row): ?>
  <?php
   $parts = explode(",", $row);
  ?>
  <div class="card">
    <p>Name: <?= $parts["name"] ?></p>
    <p>Email: <?= $parts["email"] ?></p>
    <p>Track: <?= $parts["track"] ?></p>
    <p>Shirt: <?= $parts["shirt"] ?></p>
    <p>Laptop: <?= $parts["laptop"] ?></p>
  </div>
<?php endforeach; ?>