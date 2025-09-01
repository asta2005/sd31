<?php
require __DIR__ . '/../db.php'; // pak db.php uit root, 1 map boven public/

$stmt = $pdo->query("SELECT * FROM projects");
$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <title>LivingShapes — Portfolio</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>LivingShapes Portfolio</h1>
  <div class="grid">
    <?php foreach($projects as $p): ?>
      <div class="card">
        <h2><?= htmlspecialchars($p['title']) ?></h2>
        <p><?= htmlspecialchars($p['city_location']) ?></p>
        <img src="img/<?= htmlspecialchars($p['image_main']) ?>" 
             alt="<?= htmlspecialchars($p['title']) ?> buitenkant">
        <img src="img/<?= htmlspecialchars($p['image_second']) ?>" 
             alt="<?= htmlspecialchars($p['title']) ?> binnenkant">
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>
