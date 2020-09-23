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
                        <div class="page-content__header page-content__header_shedule_edit">
                            <div class="page-content__header_row d-none d-md-flex">
                                <div class="col-12">
                                    <div class="progress progress-points">
                                        <div class="progress-points__line"></div>
                                        <div class="progress-point "></div>
                                        <div class="progress-point "></div>
                                        <div class="progress-point active"></div>
                                        <div class="progress-point "></div>
                                    </div>
                                </div>
                            </div>
                            <div class="page-content__header_row d-flex align-items-start">
                                <div class="page-shedule_nav">
                                    <a href="page_shedule_edit2.php"
                                       class="page-shedule_nav-link c-accent_darker dr-text__normal link-hover_color">
                                        <svg class="dr-icon dr-icon_accent_darker dr-icon_small_extra">
                                            <use xlink:href="img/_src/sprite.svg#angle_left"></use>
                                        </svg>
                                        <span>Назад </span>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <h1 class="page-content__title dr-h2 text-center">Выберите выходной и дни заданий</h1>
                                    <p class="page-testing__step text-center mt-20">Шаг 3</p>
                                </div>
                            </div>

                        </div>
                        <div class="page-content__body">
                            <div class="week-list">
                                <div class="week-row week-row__active_weekend_task">
                                    <div class="week-row__num">1</div>
                                    <div class="week-row__inner">
                                        <div class="week-row__item week-row__item_training">
                                            <div class="week-day">пн</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Тренировка</span><span
                                                        class="work-type__short">Т</span></div>
                                        </div>
                                        <div class="week-row__item week-row__item_weekend">
                                            <div class="week-day">вт</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Выходной</span><span
                                                        class="work-type__short">В</span></div>
                                        </div>
                                        <div class="week-row__item week-row__item_training">
                                            <div class="week-day">ср</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Тренировка</span><span
                                                        class="work-type__short">Т</span></div>
                                        </div>
                                        <div class="week-row__item week-row__item_task">
                                            <div class="week-day">чт</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Задание</span><span
                                                        class="work-type__short">З</span></div>
                                        </div>
                                        <div class="week-row__item week-row__item_training">
                                            <div class="week-day">пт</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Тренировка</span><span
                                                        class="work-type__short">Т</span></div>
                                        </div>
                                        <div class="week-row__item week-row__item_task">
                                            <div class="week-day">сб</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Задание</span><span
                                                        class="work-type__short">З</span></div>
                                        </div>
                                        <div class="week-row__item week-row__item_task">
                                            <div class="week-day">вс</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Задание</span><span
                                                        class="work-type__short">З</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="week-row week-row__active_weekend_task">
                                    <div class="week-row__num">2</div>
                                    <div class="week-row__inner">
                                        <div class="week-row__item week-row__item_training">
                                            <div class="week-day">пн</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Тренировка</span><span
                                                        class="work-type__short">Т</span></div>
                                        </div>
                                        <div class="week-row__item week-row__item_task">
                                            <div class="week-day">вт</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Задание</span><span
                                                        class="work-type__short">З</span></div>
                                        </div>
                                        <div class="week-row__item week-row__item_training">
                                            <div class="week-day">ср</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Тренировка</span><span
                                                        class="work-type__short">Т</span></div>
                                        </div>
                                        <div class="week-row__item week-row__item_weekend">
                                            <div class="week-day">чт</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Выходной</span><span
                                                        class="work-type__short">В</span></div>
                                        </div>
                                        <div class="week-row__item week-row__item_training">
                                            <div class="week-day">пт</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Тренировка</span><span
                                                        class="work-type__short">Т</span></div>
                                        </div>
                                        <div class="week-row__item week-row__item_task">
                                            <div class="week-day">сб</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Задание</span><span
                                                        class="work-type__short">З</span></div>
                                        </div>
                                        <div class="week-row__item week-row__item_task">
                                            <div class="week-day">вс</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Задание</span><span
                                                        class="work-type__short">З</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="week-row week-row__active_weekend_task is-active">
                                    <div class="week-row__num">3</div>
                                    <div class="week-row__inner">
                                        <div class="week-row__item week-row__item_training">
                                            <div class="week-day">пн</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Тренировка</span><span
                                                        class="work-type__short">Т</span></div>
                                        </div>
                                        <div class="week-row__item week-row__item_task">
                                            <div class="week-day">вт</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Задание</span><span
                                                        class="work-type__short">З</span></div>
                                        </div>
                                        <div class="week-row__item week-row__item_training">
                                            <div class="week-day">ср</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Тренировка</span><span
                                                        class="work-type__short">Т</span></div>
                                        </div>
                                        <div class="week-row__item week-row__item_task">
                                            <div class="week-day">чт</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Задание</span><span
                                                        class="work-type__short">З</span></div>
                                        </div>
                                        <div class="week-row__item week-row__item_training">
                                            <div class="week-day">пт</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Тренировка</span><span
                                                        class="work-type__short">Т</span></div>
                                        </div>
                                        <div class="week-row__item week-row__item_weekend">
                                            <div class="week-day">сб</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Выходной</span><span
                                                        class="work-type__short">В</span></div>
                                        </div>
                                        <div class="week-row__item week-row__item_task">
                                            <div class="week-day">вс</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Задание</span><span
                                                        class="work-type__short">З</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="week-row week-row__active_weekend_task">
                                    <div class="week-row__num">4</div>
                                    <div class="week-row__inner">
                                        <div class="week-row__item week-row__item_training">
                                            <div class="week-day">пн</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Тренировка</span><span
                                                        class="work-type__short">Т</span></div>
                                        </div>
                                        <div class="week-row__item week-row__item_task">
                                            <div class="week-day">вт</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Задание</span><span
                                                        class="work-type__short">З</span></div>
                                        </div>
                                        <div class="week-row__item week-row__item_training">
                                            <div class="week-day">ср</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Тренировка</span><span
                                                        class="work-type__short">Т</span></div>
                                        </div>
                                        <div class="week-row__item week-row__item_task">
                                            <div class="week-day">чт</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Задание</span><span
                                                        class="work-type__short">З</span></div>
                                        </div>
                                        <div class="week-row__item week-row__item_training">
                                            <div class="week-day">пт</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Тренировка</span><span
                                                        class="work-type__short">Т</span></div>
                                        </div>
                                        <div class="week-row__item week-row__item_task">
                                            <div class="week-day">сб</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Задание</span><span
                                                        class="work-type__short">З</span></div>
                                        </div>
                                        <div class="week-row__item week-row__item_weekend">
                                            <div class="week-day">вс</div>
                                            <div class="week-content"><span
                                                        class="work-type__full">Выходной</span><span
                                                        class="work-type__short">В</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dr-t-legend__list d-flex d-md-none mt-20">
                                <p class="dr-t-legend__item c-dark">
                                    <span class="dr-t-legend__title">
                                        <span class="">Т</span> - Тренировка
                                    </span>
                                </p>
                                <p class="dr-t-legend__item c-dark">
                                    <span class="dr-t-legend__title">
                                        <span class="">В</span> - Выходной
                                    </span>
                                </p>
                                <p class="dr-t-legend__item c-dark">
                                    <span class="dr-t-legend__title">
                                        <span class="">З</span> - Задание
                                    </span>
                                </p>
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
