<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/4f6944f9ee.js" crossorigin="anonymous"></script>
    <title>CinéFLIX</title>
</head>

<body class="bg-[#1e293b] ">

    <?php include ('content/include/navbar.php') ?>

    <header id="header" class="marging padding">
        <div class="slider">
            <img src="./assets/images/slider.png" alt="img1" class="img__slider active" />
            <img src="./assets/images/slide1.jpg" alt="img2" class="img__slider" />
            <img src="./assets/images/slide2.jpg" alt="img3" class="img__slider" />
            <div class="suivant">
                <i class="fas fa-chevron-circle-right"></i>
            </div>
            <div class="precedent">
                <i class="fas fa-chevron-circle-left"></i>
            </div>
        </div>
    </header>
    <main>
        <div class="flex justify-end mt-10 pr-20 gap-2">
            <h2 class="text-4xl font-bold text-[#c397ef]">NOUVEAUTÉS</h2>
        <img src="./assets/images/🦆 icon _chevron down outline_.svg" class="h-10" alt="">
        <img src="./assets/images/🦆 icon _chevron down outline_(1).svg" class="h-10" alt="">
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
    <section id="quality" class="flex justify-center my-[60px]">       
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
</body>

</html>