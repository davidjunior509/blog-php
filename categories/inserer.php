<?php
    require_once (__DIR__.'/../config/connexion.php');
    require_once (__DIR__.'/../includes/_header.php');

    $erreur = '';   
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $label = trim($_POST['label']);

        if(!empty($label)){
            $stmt = $pdo->prepare("INSERT INTO categories(label) VALUES(:label)");
            $stmt->execute(['label'=> $label]);
            header('Location: afficher.php'); //Rediretion
            exit;
        } else {
            $rreur = "Le nom de la catégorie est obligatoire.";
        }
    }
?>

<h2>Ajouter une catégorie</h2>

    <?php if ($erreur) : ?>
        <p style="color: red;"><?= $erreur ?></p>
    <?php endif; ?>

    <form method="post">
        <label for="label">Label : </label>
        <input type="text" name="label" id="label" required />
        <button type="submit">Ajouter</button>
    </form>

<?php require_once (__DIR__.'/../includes/_footer.php'); ?>