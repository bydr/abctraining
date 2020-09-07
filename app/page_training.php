<?php
require_once("head.php");
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
                            <div class="col-md-4 d-flex justify-content-start">
                                <p class="dr-h4 fw-normal c-dark access-text__container">
                                    Доступ закроется через:
                                    <span class="dr-text__bigger c-accent">12:42</span>
                                </p>
                            </div>
                            <div class="col">
                                <h1 class="page-content__title dr-h1 text-center">Тренировка</h1>
                            </div>
                            <div class="col-md-4 justify-content-end d-none d-md-flex">
                                <a href="#" class="c-accent dr-text__small link-hover_color"
                                   data-modal="modal_delay_workout">Перенести тренировку</a>
                            </div>
                        </div>
                        <div class="page-content__body">
                            <div class="col-12">
                                <div class="video-wrapper">
                                    <div class="video-preview"
                                         style="background-image:url(img/_src/video_preview.jpg);">
                                        <button class="dr-btn dr-btn_box video-btn_play">
                                            <svg class="dr-icon dr-icon_bigger dr-icon_white">
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
                                <div class="d-flex align-items-center justify-content-center text-center w-100 mt-30">
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <span class="checkbox-inner">
                                    <span class="checkbox-box">
                                        <svg class="dr-icon dr-icon_white">
                                            <use xlink:href="img/_src/sprite.svg#check"></use>
                                        </svg>
                                    </span>
                                    <span class="checkbox-text">Тренировка выполнена</span>
                                </span>
                                    </label>
                                </div>
                                <div class="d-flex d-md-none w-100 text-center justify-content-center mt-30">
                                    <a href="#" class="c-accent dr-text__small link-hover_color"
                                       data-modal="modal_delay_workout">Перенести тренировку</a>
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
echo file_get_contents('modal_delay_workout.php');
require_once("foot.php");
?>
