<div class="modal-background"></div>
<div class="modal-card signup">
    <header class="modal-card-head has-background-white">
        <button class="delete close-modal padding-button" aria-label="close" data-modal-id="#modalSign"></button>
    </header>
    <header class="modal-card-head is-radiusless is-paddingless has-background-white">
        <div class="modal-card-title has-text-centered has-text-dark is-size-4">
            Daftar
        </div>
    </header>
    <section class="modal-card-body">
        <div class="hr-sect is-size-7">Daftar menggunakan email Anda</div>
        <form action="" method="post">
            <div class="field">
                <label class="label is-size-7 has-text-weight-normal">Nama</label>
                <div class="control has-icons-left">
                    <input class="input is-info" type="text" name="name" placeholder="Nama">
                    <span class="icon is-small is-left">
                        <i class="fal fa-user"></i>
                    </span>
                </div>
            </div>
            <div class="field">
                <label class="label is-size-7 has-text-weight-normal">Email</label>
                <div class="control has-icons-left">
                    <input class="input is-info" type="email" name="email" placeholder="Email">
                    <span class="icon is-small is-left">
                        <i class="fal fa-envelope"></i>
                    </span>
                </div>
            </div>
            <div class="field">
                <label class="label is-size-7 has-text-weight-normal">Password</label>
                <div class="control has-icons-left">
                    <input class="input is-info" type="password" name="password" placeholder="Password">
                    <span class="icon is-small is-left">
                        <i class="fal fa-lock-alt"></i>
                    </span>
                </div>
            </div>
            <div class="field">
                <label class="label is-size-7 has-text-weight-normal">Konfirmasi Password</label>
                <div class="control has-icons-left">
                    <input class="input is-info" type="password" name="confirmpassword" placeholder="Konfirmasi Password">
                    <span class="icon is-small is-left">
                        <i class="fal fa-lock-alt"></i>
                    </span>
                </div>
            </div>
            <div class="field is-pulled-left">
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="remember">
                        <span class="has-text-dark is-size-7">Saya setuju dengan <a href="#">Syarat dan Ketentuan</a> serta <a href="">Kebijakan Privasi</a> PT. Dewata Bali Elektrik</span>
                    </label>
                </div>
            </div>
            <button id="login-form" class="button is-warning has-text-centered is-fullwidth"><strong>Daftar</strong></button>
        </form>
    </section>

    <footer class="modal-card-foot has-background-white">
        <p class="has-text-dark is-size-7 has-text-centered">
            Sudah punya akun? <strong><a id="open-login" class="button is-size-7 is-button-fool">Masuk</a></strong>
        </p>
    </footer>
</div>

<script type="text/javascript">

    $(function() {
        $("#open-login").click(function() {
            $("#modalLogin").addClass("is-active");
        });
    });

</script>

