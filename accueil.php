<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />
    <title>CinéFLIX</title>
</head>

<body class="bg-[#1e293b] ">

    <?php include ('content/include/navbar.php') ?>

    <header id="header-container" role="banner">
  <div id="header-video-container" class="zoom">

    <video id="header-video" controls autoplay loop muted playsinline width="1280" height="720" role="img">
            <source src="./assets/images/mario.mp4" type="video/mp4" />
        </video>
  </div>

  <a id="play-pause" class="hover-anim" aria-hidden="true"><i class="fas fa-pause"></i></a>
  <!-- video player control -->

  <div id="header-text" class="row">
    <div class="col-md-9">
      <h1 class="display-3 text-[60px] text-white font-extrabold">SUPER MARIO BROS</h1>
      <p class="text-[18px] text-white">Un plombier nommé Mario parcourt un labyrinthe souterrain avec son frère, 
        <br> Luigi, essayant de sauver une princesse capturée.<br> Adaptation cinématographique du célèbre jeu vidéo.</p>
      <button class="bg-teal-600 mt-[20px] text-[22px] rounded-[10px] p-[10px] px-[15px] text-white"><a href="#content" type="button" class="btn btn-primary btn-lg">Regarder</a></button>
    </div>
  </div>
</header>
    <main>
        <div class="flex justify-end mt-10 pr-20 gap-2">
            <h2 class="text-4xl md:text-4xl font-bold text-teal-600">NOUVEAUTÉS</h2>
        <img src="./assets/images/🦆 icon _chevron down outline_.svg" class="h-7 md:h-10" alt="">
        <img src="./assets/images/🦆 icon _chevron down outline_(1).svg" class="h-7 md:h-10" alt="">
        </div>
    </main>
    <section>
        <div class="scroll-holder mt-20 mb-20" id="slider-container">
            <div class="scroll-tray">
                <div>
                    <img src="./assets/images/incassable.jpeg" alt="">
                </div>
                <div>
                    <img src="./assets/images/emmett.jpeg" alt="">
                </div>
                <div>
                    <img src="./assets/images/respect.jpeg" alt="">
                </div>
                <div>
                    <img src="./assets/images/lavoiedelajustice.jpeg" alt="">
                </div>
                <div>
                    <img src="./assets/images/split.jpeg" alt="">
                </div>
                <div>
                    <img src="./assets/images/4.jpg" alt="">
                </div>
                <div>
                    <img src="./assets/images/6.jpg" alt="">
                </div>
                <div>
                    <img src="./assets/images/8.jpg" alt="">
                </div>
            </div>
            <br>
             
        </div>
    </section>
    <section id="quality" class="md:flex md:justify-center md:my-[60px] ">       
        <img class="h-full w-full" src="./assets/images/a.svg" alt="">
        <img class="h-full w-full" src="./assets/images/2.svg" alt="">
        <img class="h-full w-full" src="./assets/images/3.svg" alt="">
    </section>
    <?php include ('content/include/footer.php') ?>
    <script>
        let img__slider = document.getElementsByClassName('img__slider');

        let etape = 0;

        let nbr__img = img__slider.length;

        let precedent = document.querySelector('.precedent');
        let suivant = document.querySelector('.suivant');

        function enleverActiveImages() {
            for (let i = 0; i < nbr__img; i++) {
                img__slider[i].classList.remove('active');
            }
        }

        suivant.addEventListener('click', function () {
            etape++;
            if (etape >= nbr__img) {
                etape = 0;
            }
            enleverActiveImages();
            img__slider[etape].classList.add('active');
        })

        precedent.addEventListener('click', function () {
            etape--;
            if (etape < 0) {
                etape = nbr__img - 1;
            }
            enleverActiveImages();
            img__slider[etape].classList.add('active');
        })

        setInterval(function () {
            etape++;
            if (etape >= nbr__img) {
                etape = 0;
            }
            enleverActiveImages();
            img__slider[etape].classList.add('active');
        }, 6000)
    </script>
    <script>
        var playPauseBtn = document.getElementById("play-pause");
var player = document.getElementById("header-video");
player.removeAttribute("controls");
playPauseBtn.onclick = function() {
  if (player.paused) {
    player.play();
    this.innerHTML = '<i class="fas fa-pause"></i>';
  } else {
    player.pause();
    this.innerHTML = '<i class="fas fa-play"></i>';
  }
};
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>