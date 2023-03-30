<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href=/cineflix/assets/css/reset.css">
    <link rel="stylesheet" href="/cineflix/assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />
    <title>Document</title>
</head>
<body class="bg-[#1e293b]">
<section>
    <a href="index.php"><img src="/cineflix/assets/images/logo.png" class="logo" alt="logo"></a>
        <div class="form-box backdrop-blur-15">
            <div class="form-value">
                <form action="traitement.php" method="post" >
                    <h2>Connexion</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" id="password" required>
                        <label for="">Mot de Passe</label>
                    </div>
                    <!-----<div class="forget">
                        <label for=""><input type="checkbox">Remember Me  <a href="#">Forget Password</a></label>
                      
                    </div>------>
                    <button>Connexion</button>
                    <div class="register">
                        <p><a href="inscription.php">Pas de compte ? S'inscrire</a></p>
                    </div>
                   
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>