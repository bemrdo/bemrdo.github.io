<link rel="stylesheet" href="css/layout.css">
<link href="css/bulma-badge/dist/css/bulma-badge.min.css" rel="stylesheet">

<nav class="navbar is-fixed-top is-info" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand logo">
            <a class="navbar-item" href="https://bulma.io">
                <img src="https://bulma.io/images/bulma-logo-white.png" width="112" height="28">
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
                        <input type="text" placeholder="Saya ingin mencari" class="is-info input is-transparent">
                        <span class="icon is-left">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link kategori">
                        <span>
                            <i class="fas fa-list-ul fa-lg"></i>
                        </span>
                        Kategori
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
                        <a href="category.php" class="navbar-item has-text-info">
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
                        <a class="navbar-item is-paddingless">
                            <span class="cart-img">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/48x48.png">
                                </figure>
                            </span>
                            <span class="cart-detail columns">
                                <span class="column is-two-thirds">
                                    Nama Product disini panjang
                                </span>
                                <span class="column is-paddingless">
                                    IDR. 120.000<br>
                                    2 buah
                                </span>
                            </span>

                        </a>
                        <a class="navbar-item">
                            B
                        </a>
                        <a class="navbar-item">
                            C
                        </a>
                        <a class="navbar-item">
                            D
                        </a>
                        <a class="navbar-item">
                            E
                        </a>
                        <a class="navbar-item">
                            F
                        </a>
                        <hr class="navbar-divider">
                        <a href="category.php" class="navbar-item has-text-info">
                            Lihat selengkapnya
                        </a>
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
                        <a class="button is-warning">
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-link">
                            Log in
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>

</script>
