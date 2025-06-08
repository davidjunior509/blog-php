<?php
    require_once (__DIR__.'/../config/connexion.php');
    require_once (__DIR__.'/../includes/_header.php');
  
  
    $sql = "SELECT * FROM categories";
    $stmt = $pdo->query($sql);
    $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
?> 

    <h2>Liste des categories</h2>
    <ul>
        <?php foreach ($categories as $cat): ?>
            <li><?= htmlspecialchars($cat['label']) ?></li>

        <?php endforeach; ?>

    </ul>


<?php require_once (__DIR__.'/../includes/_footer.php'); ?>
