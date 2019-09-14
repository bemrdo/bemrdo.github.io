<?php include("start.php") ?>
<?php include("navbar.php") ?>

<link rel="stylesheet" href="../css/product.css">
<link rel="stylesheet" href="../css/product-view.css">
<link rel="stylesheet" href="../css/swiper.min.css">

<style>
    .swiper-container {
        width: 100%;
    }

    .swiper-slide {
        height: 110px;
        text-align: center;
        vertical-align: middle;
        font-size: 18px;
        padding: 0 auto;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }

    .swiper-button-next, .swiper-button-prev {
        transform: translateY(20%);
        background-color: hsl(48, 100%, 67%);
        color: rgba(0, 0, 0, 0.7);
        height: 30px;
        width: 30px;
        border-radius: 50%;
        background-image: none;
    }

    .fa-chevron-right, .fa-chevron-left {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .fa-chevron-right {
        padding-left: 5px;
    }

    .fa-chevron-left {
        padding-right: 5px;
    }

    .swiper-button-next {
        right: 0px;
    }

    .swiper-button-prev {
        left: 0px;
    }
</style>

<section class="section">
    <div class="container">
        <div class="product-path">
            <a href="/si_toko_user/view/">Baranda</a>
            &nbsp;/&nbsp;
            <a href="category.php">Kategori</a>
            &nbsp;/&nbsp;
            <p class="path-name">Nama Product tidak bisa diklik</p>
        </div>
        <div class="columns">
            <div class="column is-one-third product-image">
                <div class="main-image">
                    <img src="../image/product/pkg1.jpg" id="currentImg" alt="Image Product" title="pkg1">
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide product-thumb-image">
                            <img src="../image/product/pkg1.jpg" onclick="showImage('../image/product/pkg1.jpg','pkg1');" data-pin-nopin="true">
                        </div>
                        <div class="swiper-slide product-thumb-image">
                            <img src="../image/product/pkg2.jpg" onclick="showImage('../image/product/pkg2.jpg','pkg2');" data-pin-nopin="true">
                        </div>
                        <div class="swiper-slide product-thumb-image">
                            <img src="../image/product/pkg3.jpg" onclick="showImage('../image/product/pkg3.jpg','pkg3');" data-pin-nopin="true">
                        </div>
                        <div class="swiper-slide product-thumb-image">
                            <img src="../image/product/pkg4.jpg" onclick="showImage('../image/product/pkg4.jpg','pkg4');" data-pin-nopin="true">
                        </div>
                        <div class="swiper-slide product-thumb-image">
                            <img src="../image/product/pkg5.jpg" onclick="showImage('../image/product/pkg5.jpg','pkg5');" data-pin-nopin="true">
                        </div>
                    </div>

                    <!-- Add Arrows -->
                    <div class="swiper-button-next is-hidden-mobile is-pulled-right">
                        <i class="fas fa-chevron-right fa-lg"></i>
                    </div>
                    <div class="swiper-button-prev is-hidden-mobile">
                        <i class="fas fa-chevron-left fa-lg"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Swiper JS -->
<script src="../js/swiper.min.js"></script>

<script type="text/javascript">

    function showImage(imgPath, imgText) {
        var curImage = document.getElementById('currentImg');

        curImage.src = imgPath;
        curImage.alt = imgText;
        curImage.title = imgText;
    }

    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 4,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        slidesPerView: 4.5,
    });
</script>

<?php include("footer.php") ?>

<?php include("end.php") ?>
