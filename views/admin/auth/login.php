<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/admin-html/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:41:49 GMT -->

<head>
    <?php include_once "views/admin/layout/linkCss.php" ?>
</head>

<body>
    <main class="wrapper sb-default">
        <section class="auth-section anim">
            <div class="cr-login-page">
                <div class="container-fluid no-gutters">
                    <div class="row">
                        <div class="offset-lg-6 col-lg-6">
                            <div class="content-detail">
                                <div class="main-info">
                                    <div class="hero-container">
                                        <!-- Login form -->
                                        <form class="login-form" method="post">
                                            <div class="imgcontainer">
                                                <a href="index.html"><img src="assets/admin/img/logo/full-logo.png" alt="logo" class="logo"></a>
                                            </div>

                                            <div class="input-control">
                                                <input type="text" placeholder="Enter Username" name="ten_tk"
                                                    value="<?= htmlspecialchars($data['ten_tk'] ?? '') ?>">
                                                <?php if (!empty($err_message['ten_tk'])): ?>
                                                    <small style="color: red;"><?= $err_message['ten_tk'] ?></small>
                                                <?php endif; ?>

                                                <span class="password-field-show">
                                                    <input type="password" placeholder="Enter Password"
                                                        name="mat_khau" class="password-field" value="<?= htmlspecialchars($data['mat_khau'] ?? '') ?>">
                                                    <?php if (!empty($err_message['mat_khau'])): ?>
                                                        <small style="color: red;"><?= $err_message['mat_khau'] ?></small>
                                                    <?php endif; ?>
                                                    <span data-toggle=".password-field"
                                                        class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                                </span>
                                                <label class="label-container">Remember me
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <span class="psw"><a href="forgot.html" class="forgot-btn">Forgot
                                                        password?</a></span>
                                                <div class="login-btns">
                                                    <button type="submit">Đăng nhập</button>
                                                </div>

                                                <div class="division-lines">
                                                    <p>or login with</p>
                                                </div>
                                                <div class="login-with-btns">
                                                    <button type="button" class="google">
                                                        <i class="ri-google-fill"></i>
                                                    </button>
                                                    <button type="button" class="facebook">
                                                        <i class="ri-facebook-fill"></i>
                                                    </button>
                                                    <button type="button" class="twitter">
                                                        <i class="ri-twitter-fill"></i>
                                                    </button>
                                                    <button type="button" class="linkedin">
                                                        <i class="ri-linkedin-fill"></i>
                                                    </button>
                                                    <span class="already-acc">Quay lại trang chủ <a href="index.php?user=home"
                                                            class="signup-btn">Sign up</a></span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once "views/admin/layout/script.php" ?>
</body>
<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/admin-html/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:41:49 GMT -->

</html>