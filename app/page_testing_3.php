<?php
require_once("head.php");
$currStep = 3;

?>

<div class="page">
    <div class="container-fluid">
        <div class="row">
            <?php include "sidebar.php" ?>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-10 p-0">
                <div class="page-content">
                    <?php include "header.php" ?>
                    <div class="page-content__inner">
                        <div class="page-content__header page-content__header_training">
                            <div class="col">
                                <h1 class="page-content__title dr-h2 text-center">Тестирование</h1>
                            </div>
                        </div>
                        <div class="page-content__body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-testing">
                                        <div class="page-testing__header">
                                            <div class="progress">
                                                <div class="progress-active"
                                                     style="width: <?= (100 * $currStep) / $COUNT_STEPS_TESTING ?>%">
                                                    <div class="progress-active__dot"></div>
                                                </div>
                                            </div>
                                            <p class="page-testing__step">Шаг <?= $currStep ?></p>
                                            <div class="page-testing__header__control">
                                                <button class="dr-btn testing-nav__btn testing-nav__btn_prev">
                                                    <svg class="dr-icon">
                                                        <use xlink:href="img/_src/sprite.svg#arr_left"></use>
                                                    </svg>
                                                </button>
                                                <p class="page-testing__title">Жонглирование</p>
                                                <button class="dr-btn testing-nav__btn testing-nav__btn_next">
                                                    <svg class="dr-icon">
                                                        <use xlink:href="img/_src/sprite.svg#arr_right"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <p class="dr-text__normal c-accent_darker text-center max-w-550">Укажите при
                                                каких вариантах (возможно несколько) вы можете выполнить 3 смены
                                                подряд</p>
                                        </div>
                                        <div class="page-testing__body">
                                            <div class="testing-panel">
                                                <div class="col-12 col-md-7 col-lg-8">
                                                    <div class="video-wrapper">
                                                        <div class="video-preview"
                                                             style="background-image:url(img/_src/video_preview.jpg);">
                                                            <button class="dr-btn dr-btn_box video-btn_play">
                                                                <svg class="dr-icon dr-icon_white">
                                                                    <use xlink:href="img/_src/sprite.svg#play_btn"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <video
                                                                preload="auto"
                                                                controls
                                                                poster="img/_src/video_preview.jpg"
                                                        >
                                                            <source src="img/_src/video/Bodybuilding%20motivation%202020%20-%20Denis%20Gusev.mp4"
                                                                    type="video/mp4">
                                                        </video>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-5 col-lg-4">
                                                    <div class="task-item__info">
                                                        <div class="task-item__info_inner">
                                                            <div class="task-item__controls">
                                                                <div class="checkbox-list">
                                                                    <label class="checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="checkbox-inner">
                                                                            <span class="checkbox-box">
                                                                                <svg class="dr-icon dr-icon_white">
                                                                                    <use xlink:href="img/_src/sprite.svg#check"></use>
                                                                                </svg>
                                                                            </span>
                                                                            <span class="checkbox-text">1 предмет двумя руками в удобную сторону</span>
                                                                        </span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="checkbox-inner">
                                                                            <span class="checkbox-box">
                                                                                <svg class="dr-icon dr-icon_white">
                                                                                    <use xlink:href="img/_src/sprite.svg#check"></use>
                                                                                </svg>
                                                                            </span>
                                                                            <span class="checkbox-text">1 предмет двумя руками в удобную сторону</span>
                                                                        </span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="checkbox-inner">
                                                                            <span class="checkbox-box">
                                                                                <svg class="dr-icon dr-icon_white">
                                                                                    <use xlink:href="img/_src/sprite.svg#check"></use>
                                                                                </svg>
                                                                            </span>
                                                                            <span class="checkbox-text">1 предмет двумя руками в удобную сторону</span>
                                                                        </span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="checkbox-inner">
                                                                            <span class="checkbox-box">
                                                                                <svg class="dr-icon dr-icon_white">
                                                                                    <use xlink:href="img/_src/sprite.svg#check"></use>
                                                                                </svg>
                                                                            </span>
                                                                            <span class="checkbox-text">1 предмет двумя руками в удобную сторону</span>
                                                                        </span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="checkbox-inner">
                                                                            <span class="checkbox-box">
                                                                                <svg class="dr-icon dr-icon_white">
                                                                                    <use xlink:href="img/_src/sprite.svg#check"></use>
                                                                                </svg>
                                                                            </span>
                                                                            <span class="checkbox-text">1 предмет двумя руками в удобную сторону</span>
                                                                        </span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="checkbox-inner">
                                                                            <span class="checkbox-box">
                                                                                <svg class="dr-icon dr-icon_white">
                                                                                    <use xlink:href="img/_src/sprite.svg#check"></use>
                                                                                </svg>
                                                                            </span>
                                                                            <span class="checkbox-text">1 предмет двумя руками в удобную сторону</span>
                                                                        </span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="checkbox-inner">
                                                                            <span class="checkbox-box">
                                                                                <svg class="dr-icon dr-icon_white">
                                                                                    <use xlink:href="img/_src/sprite.svg#check"></use>
                                                                                </svg>
                                                                            </span>
                                                                            <span class="checkbox-text">1 предмет двумя руками в удобную сторону</span>
                                                                        </span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="checkbox-inner">
                                                                            <span class="checkbox-box">
                                                                                <svg class="dr-icon dr-icon_white">
                                                                                    <use xlink:href="img/_src/sprite.svg#check"></use>
                                                                                </svg>
                                                                            </span>
                                                                            <span class="checkbox-text">1 предмет двумя руками в удобную сторону</span>
                                                                        </span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="checkbox-inner">
                                                                            <span class="checkbox-box">
                                                                                <svg class="dr-icon dr-icon_white">
                                                                                    <use xlink:href="img/_src/sprite.svg#check"></use>
                                                                                </svg>
                                                                            </span>
                                                                            <span class="checkbox-text">1 предмет двумя руками в удобную сторону</span>
                                                                        </span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="checkbox-inner">
                                                                            <span class="checkbox-box">
                                                                                <svg class="dr-icon dr-icon_white">
                                                                                    <use xlink:href="img/_src/sprite.svg#check"></use>
                                                                                </svg>
                                                                            </span>
                                                                            <span class="checkbox-text">1 предмет двумя руками в удобную сторону</span>
                                                                        </span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="checkbox-inner">
                                                                            <span class="checkbox-box">
                                                                                <svg class="dr-icon dr-icon_white">
                                                                                    <use xlink:href="img/_src/sprite.svg#check"></use>
                                                                                </svg>
                                                                            </span>
                                                                            <span class="checkbox-text">1 предмет двумя руками в удобную сторону</span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    require_once("foot.php");
    ?>