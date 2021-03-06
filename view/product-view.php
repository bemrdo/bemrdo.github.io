<?php include("start.php") ?>
<?php include("navbar.php") ?>

<link rel="stylesheet" href="../css/product.css">
<link rel="stylesheet" href="../css/swiper.min.css">
<link rel="stylesheet" href="../css/product-view.css">
<link rel="stylesheet" href="../css/bulma-tooltip.min.css">

<section class="section">
    <div class="container">
        <div class="product-path">
            <a href="/si_toko_user/view/">Baranda</a>
            &nbsp;/&nbsp;
            <a href="category.php">Kategori</a>
            &nbsp;/&nbsp;
            <p class="path-name">Nama Product tidak bisa diklik</p>
        </div>
        <div class="columns is-centered">
            <div class="column is-two-fifths product-image">
                <div class="main-image">
                    <img src="../image/product/pkg1.jpg" id="currentImg" alt="Image Product" onmouseover="zoomImgin()" onmouseout="zoomImgout()">
                </div>
                <div class="thumb-container">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="border-show" src="../image/product/pkg1.jpg" id="thumbImg-1" onclick="showImage('../image/product/pkg1.jpg','thumbImg-1');" data-pin-nopin="true">
                            </div>
                            <div class="swiper-slide">
                                <img src="../image/product/pkg2.jpg" id="thumbImg-2" onclick="showImage('../image/product/pkg2.jpg','thumbImg-2');" data-pin-nopin="true">
                            </div>
                            <div class="swiper-slide">
                                <img src="../image/product/pkg3.jpg" id="thumbImg-3" onclick="showImage('../image/product/pkg3.jpg','thumbImg-3');" data-pin-nopin="true">
                            </div>
                            <div class="swiper-slide">
                                <img src="../image/product/pkg4.jpg" id="thumbImg-4" onclick="showImage('../image/product/pkg4.jpg','thumbImg-4');" data-pin-nopin="true">
                            </div>
                            <div class="swiper-slide">
                                <img src="../image/product/pkg5.jpg" id="thumbImg-5" onclick="showImage('../image/product/pkg5.jpg','thumbImg-5');" data-pin-nopin="true">
                            </div>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="arrow-container">
                        <div class="swiper-button-next is-pulled-right">
                            <i class="fas fa-chevron-right fa-lg"></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="fas fa-chevron-left fa-lg"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-three-fifths product-order">
                <div class="title is-size-4-touch is-size-3-desktop">
                    <p>KABEL TIES 2.5 MM x 100 MM ISI 100 PUTIH WIPRO</p>
                </div>
                <div class="is-size-6 product-stock is-paddingless">
                    <p>
                        <span class="">Stok : &nbsp;<strong>88</strong> pack</span>&nbsp;
                        <span class="tooltip has-text-centered is-tooltip-warning is-tooltip-right is-tooltip-multiline" data-tooltip="Stok barang yang tersedia saat ini.">
                            <i class="fa fa-info-circle"></i></span>&nbsp;
                        <span>
                            <a class="button is-small is-info is-outlined btn-copy" onclick="copyTC('#url')">
                                <span class="icon is-small">
                                    <i class="fas fa-link"></i>
                                </span>
                                <span>Share</span>
                            </a>
                            <p id="url" style="display:none;">P2: I am a second paragraph</p>
                        </span>
                    </p>
                </div>
                <div class="title is-size-4-touch is-size-3-desktop is-marginless">
                    <strong>
                        <p class="product-cost"><?php echo "Rp. " . number_format("120000","0","",".")?><span class="is-size-5 has-text-dark"> / pack</span></p>
                    </strong>
                </div>
                <div class="columns is-mobile is-vcentered">
                    <div class="column is-narrow">
                        <p>Jumlah</p>
                        <div class="field has-addons">
                            <div class="control">
                                <button id="countCheckUp" class="button is-warning count-checkmin" onclick="document.querySelector('#item-count').stepDown()">
                                    <i class="far fa-minus"></i>
                                </button>
                            </div>
                            <div class="control">
                                <input class="input is-warning is-outlined" type="number" min="0" max="9" step="1" value="1" id="item-count">
                            </div>
                            <div class="control">
                                <button id="countCheckDown" class="button is-warning count-checkmax" onclick="document.querySelector('#item-count').stepUp()">
                                    <i class="far fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="column is-narrow">
                        <p>Total Harga</p>
                        <div class="title is-size-5-touch is-size-4-desktop product-total">
                            <p><?php echo "Rp. " . number_format("120000","0","",".")?></p>
                        </div>
                    </div>
                </div>
                <div class="columns is-mobile">
                    <a href="order.php">
                        <div class="column is-vpaddingless is-narrow">
                            <button class="button is-medium is-success">
                                <strong>
                                    <p><i class="fas fa-cart-plus"></i>&nbsp; Pesan Sekarang</p>
                                </strong>
                            </button>
                        </div>
                    </a>
                </div>
                <div class="product-info">
                    <div class="title is-size-6 is-marginless has-text-link"><i class="far fa-clipboard-list"></i>&nbsp; <strong>Informasi Produk :</strong></div>
                    <hr class="has-background-link is-marginless">
                    <div class="is-size-6 product-spec product-showless" id="productSpec">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores reiciendis vel nisi, expedita ex, aperiam illo explicabo adipisci, praesentium, incidunt sequi possimus aut error illum accusamus fugiat perferendis consequatur eaque.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores reiciendis vel nisi, expedita ex, aperiam illo explicabo adipisci, praesentium, incidunt sequi possimus aut error illum accusamus fugiat perferendis consequatur eaque.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores reiciendis vel nisi, expedita ex, aperiam illo explicabo adipisci, praesentium, incidunt sequi possimus aut error illum accusamus fugiat perferendis consequatur eaque.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores reiciendis vel nisi, expedita ex, aperiam illo explicabo adipisci, praesentium, incidunt sequi possimus aut error illum accusamus fugiat perferendis consequatur eaque.</p>
                    </div>
                    <button id="showMore" class="is-size-6 button is-fullwidth is-medium is-light product-show">
                        <p>Lihat lebih lengkap &nbsp;<i class="fal fa-angle-down fa-lg"></i></p>
                    </button>
                    <button id="showLess" class="is-size-6 button is-fullwidth is-medium is-light product-show is-hidden">
                        <p>Sembunyikan &nbsp;<i class="fal fa-angle-up fa-lg"></i></p>
                    </button>
                </div>
            </div>
        </div>
        <div class="title is-size-4 product-else">Produk lainnya :</div>
        <div class="columns is-multiline is-centered is-mobile">
            <?php include("product.php") ?>
            <?php include("product.php") ?>
            <?php include("product.php") ?>
            <?php include("product.php") ?>
            <?php include("product.php") ?>
            <?php include("product.php") ?>
        </div>
    </div>
</section>

<!-- Loupe Zoom -->

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.loupe.js"></script>
<script type="text/javascript" src="../js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.2.js"></script>
<link rel="stylesheet" type="text/css" href="../css/jquery.loupe.css" />

<script type="text/javascript">
    $(document).ready(function() {
        $('#currentImg').loupe({
            'default_zoom': 100,
            'max_size': 600,
            'default_size': 200,
            'loupe_toggle_time': 'fast',
        });
    });

    function zoomImgin() {
        //$('#loupe-0').remove();
        //$('#loupe_overlay-0').remove();
        $('#currentImg').loupe({
            'default_zoom': 100,
            'max_size': 600,
            'default_size': 200,
            'loupe_toggle_time': 'fast',
        });
    }

    function zoomImgouts() {
        var elem = document.getElementById('loupe-0');
        elem.parentNode.removeChild(elem);
        return false;
    }
    /*function zoomImgout() {
        document.getElementById('loupe-0').remove();
        document.getElementById('loupe_overlay-0').remove();
    }*/

</script>

<!-- SweetAlert2 -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.17.1/dist/sweetalert2.all.min.js"></script>

<!-- Copy Link -->
<script type="text/javascript">
    function copyTC(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
        Swal.fire({
            //position: 'top-end',
            type: 'success',
            title: 'Link berhasil disalin',
            showConfirmButton: false,
            timer: 1500
        })
    }

    document.getElementById("url").innerHTML = window.location.href;

    $('#showMore').click(function() {
        $('#showMore').addClass('is-hidden');
        $('#showLess').removeClass('is-hidden');
        $('#productSpec').removeClass('product-showless');
    })
    $('#showLess').click(function() {
        $('#showLess').addClass('is-hidden');
        $('#showMore').removeClass('is-hidden');
        $('#productSpec').addClass('product-showless');
    })

    $('#countCheckUp').click(function() {
        if ($('#item-count').attr('value') > $('#item-count').attr('min')) {
            $('.count-checkmin').prop('disabled', false);
        } else {
            $('.count-checkmin').prop('disabled', true);
        }
        if ($('#item-count').attr('value') < $('#item-count').attr('max')) {
            $('.count-checkmax').prop('disabled', false);
        }
    })

    $('#countCheckDown').click(function() {
        if ($('#item-count').attr('value') < $('#item-count').attr('max')) {
            $('.count-checkmax').prop('disabled', false);
        } else {
            $('.count-checkmax').prop('disabled', true);
        }
        if ($('#item-count').attr('value') > $('#item-count').attr('min')) {
            $('.count-checkmin').prop('disabled', false);
        }
    })
</script>

<!-- Swiper JS -->
<script src="../js/swiper.min.js"></script>

<script type="text/javascript">
    function showImage(imgPath, imgId) {
        var curImage = document.getElementById('currentImg');
        curImage.src = imgPath;
    }

    $(function() {
        $("#thumbImg-1").click(function() {
            $(".border-show").removeClass("border-show")
            $("#thumbImg-1").addClass("border-show");
        });
        $("#thumbImg-2").click(function() {
            $(".border-show").removeClass("border-show")
            $("#thumbImg-2").addClass("border-show");
        });
        $("#thumbImg-3").click(function() {
            $(".border-show").removeClass("border-show")
            $("#thumbImg-3").addClass("border-show");
        });
        $("#thumbImg-4").click(function() {
            $(".border-show").removeClass("border-show")
            $("#thumbImg-4").addClass("border-show");
        });
        $("#thumbImg-5").click(function() {
            $(".border-show").removeClass("border-show")
            $("#thumbImg-5").addClass("border-show");
        });
    });

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
