<div class="limiter">
    <div class="container-login100"
        style="background-image: url('<?= base_url(); ?>/assets/Login_v4/images/bg-01.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form" method="POST" action="/register/save">
                <span class="login100-form-title p-b-49">
                    Register
                </span>

                <?php if(isset($validation)):?>
                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>

                <div class="wrap-input100 validate-input m-b-23" data-validate="Username is required">
                    <span class="label-input100">Username</span>
                    <input class="input100" type="text" name="username" placeholder="Type your username" id="username">
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="password" placeholder="Type your password"
                        id="password">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Repeat Password</span>
                    <input class="input100" type="password" name="confpassword" placeholder="Repeat your password"
                        id="Repeat password">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div>

                <div class="p-t-8 p-b-31">
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button type="submit" class="login100-form-btn">
                            Sign Up
                        </button>
                    </div>
                </div>

                <div class="flex-col-c p-t-33">
                    <a href="/" class="txt2">
                        Sign In
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>