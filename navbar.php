<link rel="stylesheet" href="css/layout.css">

<nav class="navbar is-fixed-top is-dark" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand logo">
            <a class="navbar-item" href="https://bulma.io">
                <img src="https://bulma.io/images/bulma-logo-white.png" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <div class="navbar-item has-dropdown">
                    <a class="navbar-link kategori">
                        <i class="fas fa-list-ul fa-lg"></i>
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
                    </div>
                </div>
            </div>

            <div class="dropdown">
                <div class="dropdown-trigger">
                    <button aria-haspopup="true" aria-controls="dropdown-menu3">
                        <span>Click me</span>
                        <span class="icon is-small">
                            <i class="fas fa-angle-down" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>
                <div class="dropdown-menu" id="dropdown-menu3" role="menu">
                    <div class="dropdown-content">
                        <a href="#" class="dropdown-item">
                            Overview
                        </a>
                        <a href="#" class="dropdown-item">
                            Modifiers
                        </a>
                        <a href="#" class="dropdown-item">
                            Grid
                        </a>
                        <a href="#" class="dropdown-item">
                            Form
                        </a>
                        <a href="#" class="dropdown-item">
                            Elements
                        </a>
                        <a href="#" class="dropdown-item">
                            Components
                        </a>
                        <a href="#" class="dropdown-item">
                            Layout
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            More
                        </a>
                    </div>
                </div>
            </div>


            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-info">
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-light">
                            Log in
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {

        // Dropdowns

        var $dropdowns = getAll('.dropdown:not(.is-hoverable)');

        if ($dropdowns.length > 0) {
            $dropdowns.forEach(function ($el) {
                $el.addEventListener('click', function (event) {
                    event.stopPropagation();
                    $el.classList.toggle('is-active');
                });
            });

            document.addEventListener('click', function (event) {
                closeDropdowns();
            });
        }

        function closeDropdowns() {
            $dropdowns.forEach(function ($el) {
                $el.classList.remove('is-active');
            });
        }

        // Close dropdowns if ESC pressed
        document.addEventListener('keydown', function (event) {
            var e = event || window.event;
            if (e.keyCode === 27) {
                closeDropdowns();
            }
        });

        // Functions

        function getAll(selector) {
            return Array.prototype.slice.call(document.querySelectorAll(selector), 0);
        }
    });
</script>
