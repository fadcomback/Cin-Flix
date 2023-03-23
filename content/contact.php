<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Contact</title>
</head>
<body class="bg-[#1e293b]">
<?php include ('include/navbar.php') ?>
<h2 class="text-white text-[40px] text-center mt-[40px]">UNE QUESTION ?</h2>
<div class="flex flex-row mx-[120px] my-[60px]">
    <div class="basis-1/2">
        <h3 class="text-[30px] text-white mt-[60px] mb-[40px]">Nos Contact</h3>
        <div class="flex gap-3">
        <img src="../assets/images/plain.svg" alt="">
        <p class="text-white text-[25px]">CinéFlix@Cinéflix.com</p>
        </div>
        <div class="flex gap-3">
        <img src="../assets/images/call.svg" alt="">
        <p class="text-white text-[25px]">0324123123</p>
        </div>
    </div>
    <div class="basis-1/2">
        <div class="">
            <form action="" method="post">
                <input class="bg-[#262626] p-[15px] m-[15px] text-white text-[18px] rounded-[6px] w-full" type="text" name="nom" placeholder="Votre Nom" required>
                <input class="bg-[#262626] p-[15px] m-[15px] text-white text-[18px] rounded-[6px] w-full" type="email" name="email" placeholder="Votre Email" required>
                <textarea class="bg-[#262626] p-[15px] m-[15px] text-white text-[18px] rounded-[6px] w-full" name="message" rows="6" placeholder="Votre Message" required></textarea>
                <button class="bg-[#c397ef] pb-[14px] pt-[14px] pl-[60px] pr-[60px] m-[15px] text-[18px] rounded-[6px]" type="submit">Envoyer</button>
            </form>
        </div>
    </div>
</div>




<?php include ('include/footer.php') ?>
</body>
</html>