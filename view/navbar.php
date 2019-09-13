<link rel="stylesheet" href="../css/layout.css">
<link href="../css/bulma-badge.min.css" rel="stylesheet">

<nav class="navbar is-fixed-top is-info" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand logo">
            <a class="navbar-item" href="#">
                <img src="../image/logo-white.png">
                <span class="logo-name is-size-7">
                    Dewata<br>Bali<br>Elektrik
                </span>
            </a>

            <div class="mobile-view is-hidden-desktop is-flex-touch">
                <a href="" id="cart" class="navbar-link is-arrowless cart">
                    <span class="has-badge-rounded has-badge-warning" data-badge="5">
                        <i class="far fa-shopping-cart fa-lg"></i>
                    </span>
                </a>
                <a href="" id="notif" class="navbar-link is-arrowless notif">
                    <span class="has-badge-rounded has-badge-warning" data-badge="5">
                        <i class="far fa-bell fa-lg"></i>
                    </span>
                </a>
            </div>


            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarMenu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarMenu" class="navbar-menu is-info">
            <div class="navbar-start">
                <div class="navbar-item search">
                    <div class="control has-icons-left">
                        <input type="text is-info is-outlined" placeholder="Saya ingin mencari" class="is-info input is-transparent">
                        <span class="icon is-left">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link kategori">
                        <span>
                            <i class="far fa-stream fa-lg has-text-warning"></i>
                        </span>
                        <strong class="is-size-5">Kategori</strong>
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item">
                            A
                        </a>
                        <a class="navbar-item">
                            B
                        </a>
                        <a class="navbar-item">
                            C
                        </a>
                        <hr class="navbar-divider">
                        <a href="category.php" class="navbar-item has-text-info is-size-7">
                            Lihat selengkapnya
                        </a>
                    </div>
                </div>
            </div>

            <div class="navbar-end">

                <div class="navbar-item has-dropdown is-hoverable is-hidden-touch">
                    <a href="" id="cart" class="navbar-link is-arrowless">
                        <span class="has-badge-rounded has-badge-warning" data-badge="5">
                            <i class="far fa-shopping-cart fa-lg"></i>
                        </span>
                    </a>

                    <div class="navbar-dropdown is-right">
                        <div class="cart-wrapper">

                            <a href="#" class="navbar-item cart-dropdown is-paddingless">
                                <img src="https://bulma.io/images/placeholders/128x128.png">
                                <p class="cart-name">
                                    <span>
                                        Nama Product disini panjang ini lebih panjang lagi
                                    </span>
                                    <br>
                                    <span class="cart-var">
                                        Variasi: putih hitam belang
                                    </span>
                                </p>
                                <p class="cart-item">
                                    <span class="cart-stock-ready">
                                        Stock Tersedia
                                    </span>
                                    <br>
                                    <span class="cart-cost">
                                        Rp. 120.000.000
                                    </span>
                                    <br>
                                    <span>
                                        2 barang
                                    </span>
                                </p>
                            </a>

                            <a href="#" class="navbar-item cart-dropdown is-paddingless">
                                <img src="https://bulma.io/images/placeholders/128x128.png">
                                <p class="cart-name">
                                    <span>
                                        Nama Product disini panjang ini lebih panjang lagi
                                    </span>
                                    <br>
                                    <span class="cart-var">
                                        Variasi: putih hitam belang
                                    </span>
                                </p>
                                <p class="cart-item">
                                    <span class="cart-stock-empty">
                                        Stock Habis
                                    </span>
                                    <br>
                                    <span class="cart-cost">
                                        Rp. 120.000.000
                                    </span>
                                    <br>
                                    <span>
                                        2 barang
                                    </span>
                                </p>
                            </a>

                            <hr class="navbar-divider">
                            <div class="cart-total has-text-dark is-size-7">
                                Total: <b>5 produk</b>
                            </div>
                            <div class="buttons cart-button is-pulled-right">
                                <a class="button is-warning is-size-7">
                                    Tampilkan keranjang belanja
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="navbar-item has-dropdown is-hoverable is-hidden-touch">
                    <a href="" id="notif" class="navbar-link is-arrowless">
                        <span class="has-badge-rounded has-badge-warning" data-badge="5">
                            <i class="far fa-bell fa-lg"></i>
                        </span>
                    </a>

                    <div class="navbar-dropdown is-right">
                        <a class="navbar-item">
                            A
                        </a>
                        <a class="navbar-item">
                            B
                        </a>
                        <a class="navbar-item">
                            C
                        </a>
                        <hr class="navbar-divider">
                        <a href="category.php" class="navbar-item has-text-info">
                            Lihat selengkapnya
                        </a>
                    </div>
                </div>

                <div class="navbar-item">
                    <div class="buttons is-centered">

                        <a class="button is-link modal-button" data-target="modalLogin">
                            <strong>Masuk</strong>
                        </a>
                        <div class="modal" id="modalLogin">
                            <?php include('login.php') ?>
                        </div>

                        <a class="button is-warning modal-button" data-target="modalSign">
                            <strong>Daftar</strong>
                        </a>
                        <div class="modal" id="modalSign">
                            <?php include('signup.php') ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
