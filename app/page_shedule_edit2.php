<?php
require_once("head.php");
?>

<div class="page ">
    <div class="container-fluid">
        <div class="row">
            <?php include "sidebar.php" ?>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-10 p-0">
                <div class="page-content">
                    <?php include "header.php" ?>
                    <div class="page-content__inner">
                        <div class="page-content__header page-content__header_shedule_edit">
                            <div class="page-content__header_row d-none d-md-flex">
                                <div class="col-12">
                                    <div class="progress progress-points">
                                        <div class="progress-points__line"></div>
                                        <div class="progress-point "></div>
                                        <div class="progress-point active"></div>
                                        <div class="progress-point "></div>
                                        <div class="progress-point "></div>
                                    </div>
                                </div>
                            </div>
                            <div class="page-content__header_row d-flex align-items-start">
                                <div class="page-shedule_nav">
                                    <a href="page_shedule_edit1.php"
                                    class="page-shedule_nav-link c-accent_darker dr-text__normal link-hover_color">
                                        <svg class="dr-icon dr-icon_accent_darker dr-icon_small_extra">
                                            <use xlink:href="img/_src/sprite.svg#angle_left"></use>
                                        </svg>
                                        <span>Назад </span>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <h1 class="page-content__title dr-h2 text-center">Выберите время тренировок</h1>
                                    <p class="page-testing__step text-center mt-20">Шаг 2</p>
                                </div>
                            </div>

                        </div>
                        <div class="page-content__body">
                            <div class="week-list week-list_not-number week-list_notjs">
                                <div class="week-row">
                                    <div class="week-row__inner">
                                        <div class="week-row__item week-row__item_training">
                                            <div class="week-day">пн</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Тренировка</span><span
                                                        class="work-type__short">Т</span></div>
                                        </div>
                                        <div class="week-row__item">
                                            <div class="week-day">вт</div>
                                            <div class="week-content"></div>
                                        </div>
                                        <div class="week-row__item week-row__item_training">
                                            <div class="week-day">ср</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Тренировка</span><span
                                                        class="work-type__short">Т</span></div>
                                        </div>
                                        <div class="week-row__item">
                                            <div class="week-day">чт</div>
                                            <div class="week-content"></div>
                                        </div>
                                        <div class="week-row__item week-row__item_training">
                                            <div class="week-day">пт</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Тренировка</span><span
                                                        class="work-type__short">Т</span></div>
                                        </div>
                                        <div class="week-row__item">
                                            <div class="week-day">сб</div>
                                            <div class="week-content"></div>
                                        </div>
                                        <div class="week-row__item">
                                            <div class="week-day">вс</div>
                                            <div class="week-content"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mt-40 w-100">
                                <div class="time-select-box">
                                    <p class="time-select-box__label dr-text__big">пн</p>
                                    <div class="time-select-box__content">
                                        <input type="text" class="form-control field-time" placeholder="12:00">
                                    </div>
                                </div>
                                <div class="time-select-box">
                                    <p class="time-select-box__label dr-text__big">ср</p>
                                    <div class="time-select-box__content">
                                        <input type="text" class="form-control field-time" placeholder="12:00">
                                    </div>
                                </div>
                                <div class="time-select-box">
                                    <p class="time-select-box__label dr-text__big">пт</p>
                                    <div class="time-select-box__content">
                                        <input type="text" class="form-control field-time" placeholder="12:00">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex w-100 justify-content-center mt-20">
                                <button class="dr-btn dr-btn_accent">Сохранить</button>
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
