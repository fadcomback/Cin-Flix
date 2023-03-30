<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href=/cineflix/assets/css/reset.css">
    <link rel="stylesheet" href="/cineflix/assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />
</head>
<body>
    <section>
        <a href="index.php"><img src="assets/logotwo.png" class="logo" alt="logo"></a>
        <div class="form-box">
            <div class="form-value">
                <form action="traitement_inscription.php" method="post">
                    <h2>Inscription</h2>
                    <div class="inputbox">
                        <input type="name" name="nom" required>
                        <label for="">Nom</label>
                    </div>
                    <div class="inputbox">
                        <input type="name" name="prenom" required>
                        <label for="">Prénom</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required>
                        <label for="">Password</label>
                    </div>
                    <button>Inscription</button>
                    <div class="msg-inscription">
                    <?php
                    // Si un message d'erreur est stocké dans la session
                    if(isset($_SESSION['reg_error'])){
                    // On affiche le message d'erreur
                    echo '<p>' . $_SESSION['reg_error'] . '</p>';
                    // On supprime le message d'erreur de la session
                   unset($_SESSION['reg_error']);
                   }
                   ?>
                   </div>
                    <div class="register">
                        <p><a href="connexion.php">Vous avez un compte ? Connectez-vous</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>