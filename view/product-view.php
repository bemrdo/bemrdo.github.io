<?php include("start.php") ?>
<?php include("navbar.php") ?>

<link rel="stylesheet" href="../css/product.css">
<link rel="stylesheet" href="../css/swiper.min.css">
<link rel="stylesheet" href="../css/product-view.css">
<link rel="stylesheet" href="../css/bulma-tooltip.min.css">

<style>

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
        <div class="columns is-centered">
            <div class="column is-one-third product-image">
                <div class="main-image">
                    <img src="../image/product/pkg1.jpg" id="currentImg" alt="Image Product"  onmouseover="zoomImgin()" onmouseout="zoomImgout()">
                </div>
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
            <div class="column is-two-fifths product-order">
                <div class="title is-size-3">
                    <p>Nama Product panjang disini panjang sekali</p>
                </div>
                <div class="is-size-6 product-stock is-paddingless">
                    <p>
                        <span class="is-hidden-touch is-hidden-desktop-only"><strong>88</strong> Terjual &nbsp; &#124; &nbsp;</span><span class="is-hidden-widescreen"><strong>88</strong> Terjual<br></span><strong>3</strong> Terpesan dari <strong>4</strong> Tersedia &nbsp;<span class="has-text-centered tooltip is-tooltip-warning is-tooltip-right is-tooltip-left-mobile is-tooltip-multiline" data-tooltip="Terjual adalah jumlah barang yang telah sukses terjual. Terpesan adalah jumlah barang yang saat ini terpesan (batas 24 jam sejak dipesan) dari stok barang yang Tersedia saat ini."><i class="fa fa-info-circle"></i></span>&nbsp;
                        <span>
                            <a class="button is-small is-info is-outlined btn-copy is-pulled-right" onclick="copyTC('#url')">
                                <span class="icon is-small">
                                    <i class="fas fa-link"></i>
                                </span>
                                <span>Share</span>
                            </a>
                            <p id="url" style="display:none;">P2: I am a second paragraph</p>
                        </span>
                    </p>
                </div>
                <div class="title is-size-4 is-danger">
                    <strong>
                        <p class="product-cost">Rp. 120.000</p>
                    </strong>
                </div>
            </div>
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
    $(document).ready(function(){
        $('#currentImg').loupe({
            'default_zoom': 100,
            'max_size' : 600,
            'default_size' : 200,
            'loupe_toggle_time' : 'fast',
        });
    });
    function zoomImgin() {
        //$('#loupe-0').remove();
        //$('#loupe_overlay-0').remove();
        $('#currentImg').loupe({
            'default_zoom': 100,
            'max_size' : 600,
            'default_size' : 200,
            'loupe_toggle_time' : 'fast',
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
