<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>CpaHope</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
            rel="stylesheet"
    />
    <link rel="stylesheet" href="src/styles/style.css"/>
</head>
<body>
<?php include_once('section/header.php'); ?>
<!-- Hero -->
<?php include_once('section/hero.php'); ?>
<!-- Hero ends -->
<!-- Contact -->
<?php include_once('section/contact.php'); ?>
<!-- Contact Ends -->
<!-- Feature -->
<?php include_once('section/feature.php'); ?>
<!-- Feature Ends -->
<!-- Publishers -->
<?php include_once('section/publisher.php'); ?>
<!-- Publishers End -->

<!-- Section about-us -->
<?php include_once('section/about-us.php'); ?>
<!-- about-us ends -->

<!-- advertisers -->
<?php include_once('section/advertisers.php'); ?>

<!-- Footer -->
<?php include_once('section/footer.php'); ?>

<button onclick="topFunction()" id="goToTop" title="Go to top">
    <svg>
        <use xlink:href="./src/images/icons/icons.svg#gototop"/>
    </svg>
</button>

<!-- Section ends -->

<script>
    const playback = document.getElementById("playback");
    const mediaControl = document.getElementById("media-control");
    const closePlayer = document.getElementById("close-player");
    const navbarContent = document.querySelector(".navbar__content");
    const menu = document.querySelector(".menu");
    const closeMenu = document.querySelector(".menu-close");

    mediaControl.addEventListener(
        "click",
        () => (playback.style.display = "block")
    );
    closePlayer.addEventListener(
        "click",
        () => (playback.style.display = "none")
    );
    // scroll to top
    const goToTop = document.getElementById("goToTop");

    window.onscroll = function () {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            goToTop.style.display = "block";
        } else {
            goToTop.style.display = "none";
        }
    }

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

    // menu show
    menu.addEventListener("click", () => {
        navbarContent.classList.add("navbar__content--active");
        navbarContent.classList.add("navbar__content--stack");
    });
    // menu close
    closeMenu.addEventListener("click", () => {
        navbarContent.classList.remove("navbar__content--active");
        navbarContent.classList.remove("navbar__content--stack");
    });
</script>
</body>
</html>
