<?php include("start.php") ?>
<?php include("navbar.php") ?>

<link rel="stylesheet" href="../css/product.css">
<link rel="stylesheet" href="../css/product-view.css">
<link rel="stylesheet" href="../css/swiper.min.css">

<style>
    .swiper-container {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        height: 400px;
        text-align: center;
        vertical-align: middle;
        font-size: 18px;
        padding: 0 auto;
        background: #d8d8d8;
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

    .swiper-section {
        padding: 4rem 0 1rem 0;
    }

    .swiper-pagination-bullet-active,
    .swiper-pagination-bullet:hover {
        vertical-align: middle;
        width: 12px;
        height: 12px;
        transition: 0.2s;
    }

    .swiper-button-next, .swiper-button-prev {
        top: 50%;
        transform: translateY(-30%);
        background-color: hsl(48, 100%, 67%);
        color: rgba(0, 0, 0, 0.7);
        height: 50px;
        width: 50px;
        border-radius: 50%;
        background-image: none;
    }

    .swiper-button-next {
        right: 30px;
    }

    .swiper-button-prev {
        left: 30px;
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
                <div class="swiper-button-next is-hidden-mobile">
                    <i class="fas fa-chevron-right fa-2x"></i>
                </div>
                <div class="swiper-button-prev is-hidden-mobile">
                    <i class="fas fa-chevron-left fa-2x"></i>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Swiper JS -->
<script src="../dist/js/swiper.min.js"></script>

<script type="text/javascript">

    function showImage(imgPath, imgText) {
        var curImage = document.getElementById('currentImg');

        curImage.src = imgPath;
        curImage.alt = imgText;
        curImage.title = imgText;
    }

    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>

<?php include("footer.php") ?>

<?php include("end.php") ?>
