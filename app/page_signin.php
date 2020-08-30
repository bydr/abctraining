<?php
require_once("head.php");
?>

<div class="page">
    <div class="container-fluid">
        <div class="row">
            <div class="d-none d-md-flex col-12 col-md-6 bg-accent_super_lightest">
                <div class="auth-image__wrapper">
                    <div class="auth-image__inner">
                        <h2 class="dr-h1 fw-bold c-accent mb-60">Art of Body Control</h2>
                        <img src="img/_src/auth1.png" alt="Art of Body Control" title="Art of Body Control">
                    </div>

<!--                    <svg class="fig-ellips_big_top anim-top-bottom">-->
<!--                        <use xlink:href="img/_src/sprite.svg#figure22"></use>-->
<!--                    </svg>-->
<!--                    <svg class="fig-ellips_big_bottom anim-top-bottom">-->
<!--                        <use xlink:href="img/_src/sprite.svg#figure22"></use>-->
<!--                    </svg>-->
<!--                    <svg class="fig-ellips_small_top anim-top-bottom">-->
<!--                        <use xlink:href="img/_src/sprite.svg#figure20"></use>-->
<!--                    </svg>-->
<!--                    <svg class="fig-ellips_small_bottom anim-top-bottom">-->
<!--                        <use xlink:href="img/_src/sprite.svg#figure20"></use>-->
<!--                    </svg>-->
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="auth-form__wrapper">
                    <div class="auth-form__inner">
                        <form action="/" class="dr-form auth-form text-center justify-content-center max-w-320">
                            <h1 class="dr-h1 mb-50">Вход</h1>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" placeholder="" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="form-control__group-btn">
                                    <input type="password" class="form-control input-password" placeholder="" id="password" required>
                                    <button type="button" class="dr-btn_control_form dr-btn_password">
                                        <svg class="dr-icon dr-icon_gray">
                                            <use xlink:href="img/_src/sprite.svg#eye"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="d-flex flex-row justify-content-end mt-10 mb-20">
                                <a href="#" class="dr-text__normal c-accent_darker text-right link-hover_color">Забыли пароль?</a>
                            </div>
                            <button type="submit" class="dr-btn dr-btn_accent">Войти</button>
                            <p class="dr-text__normal c-dark mt-40 text-center">Нет аккаунта?
                                <a href="#" class="dr-text__big c-accent text-right link-hover_color">Зарегистрируйтесь</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once("foot.php");
?>
