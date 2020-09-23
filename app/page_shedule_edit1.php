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
                                        <div class="progress-point active"></div>
                                        <div class="progress-point "></div>
                                        <div class="progress-point "></div>
                                        <div class="progress-point "></div>
                                    </div>
                                </div>
                            </div>
                            <div class="page-content__header_row d-flex">
                                <div class="col-12">
                                    <h1 class="page-content__title dr-h2 text-center">Выберите дни тренировок</h1>
                                    <p class="dr-h5 text-center">на текущую неделю</p>
                                    <p class="page-testing__step text-center mt-10">Шаг 1</p>
                                </div>
                            </div>

                        </div>
                        <div class="page-content__body">
                            <div class="week-list">
                                <div class="week-row week-row__active_training is-active">
                                    <div class="week-row__num">1</div>
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
                                <div class="week-row week-row__active_training">
                                    <div class="week-row__num">2</div>
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
                                <div class="week-row week-row__active_training">
                                    <div class="week-row__num">3</div>
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
                                <div class="week-row week-row__active_training">
                                    <div class="week-row__num">4</div>
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
                                <div class="week-row week-row__active_training">
                                    <div class="week-row__num">5</div>
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
                                <div class="week-row week-row__active_training">
                                    <div class="week-row__num">6</div>
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
                                <div class="week-row week-row__active_training">
                                    <div class="week-row__num">7</div>
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

                            <div class="dr-t-legend__list d-flex d-md-none mt-20">
                                <p class="dr-t-legend__item c-dark">
                                    <span class="dr-t-legend__title">
                                        <span class="">Т</span> - Тренировка
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
