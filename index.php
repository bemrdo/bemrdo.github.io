<?php include("start.php") ?>
<?php include("navbar.php") ?>

<link rel="stylesheet" href="css/swiper.min.css">
<link rel="stylesheet" href="css/index.css">
<script src="js/swiper.min.js"></script>

<style>

</style>

<div class="swiper-section">
    <div class="container">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">Advertisement 1</div>
                <div class="swiper-slide">Advertisement 2</div>
                <div class="swiper-slide">Advertisement 3</div>
                <div class="swiper-slide">Advertisement 1</div>
                <div class="swiper-slide">Advertisement 2</div>
                <div class="swiper-slide">Advertisement 3</div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next is-hidden-mobile"><i class="fas fa-chevron-right fa-3x"></i></div>
            <div class="swiper-button-prev is-hidden-mobile"><i class="fas fa-chevron-left fa-3x"></i></div>
        </div>
    </div>
</div>

<script>
    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 0,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        slidesPerView: 1,
        loop: true,
    });

</script>

<?php include("end.php") ?>
