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
                        <div class="page-content__header">
                            <div class="page-content__header_row d-flex">
                                <div class="col">
                                    <h1 class="page-content__title dr-h2 text-center">Расписание тренировок</h1>
                                </div>
                            </div>
                            <div class="page-content__header_row">
                                <div class="col-md-4 d-flex justify-content-start">
                                    <div class="dropdown dropdown-tooltip">
                                        <div class="dropdown-header dropdown-header__responsive">
                                            <svg class="dr-icon dr-icon_small">
                                                <use xlink:href="img/_src/sprite.svg#edit"></use>
                                            </svg>
                                            <p class="dropdown-header__title">Редактировать</p>
                                            <p class="dropdown-header__title_responsive">Редакт.</p>
                                        </div>
                                        <div class="dropdown-drop">
                                            <div class="operations-list">
                                                <a href="#" class="operation-item">
                                                    <svg class="dr-icon">
                                                        <use xlink:href="img/_src/sprite.svg#calendar-digit"></use>
                                                    </svg>
                                                    <p class="operation-item__title">
                                                        Изменить дни тренировок
                                                    </p>
                                                </a>
                                                <a href="#" class="operation-item">
                                                    <svg class="dr-icon">
                                                        <use xlink:href="img/_src/sprite.svg#clock"></use>
                                                    </svg>
                                                    <p class="operation-item__title">
                                                        Изменить время тренировок
                                                    </p>
                                                </a>
                                                <a href="#" class="operation-item">
                                                    <svg class="dr-icon">
                                                        <use xlink:href="img/_src/sprite.svg#sleep"></use>
                                                    </svg>
                                                    <p class="operation-item__title">
                                                        Изменить выходной и дни заданий
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <nav class="date-nav">
                                        <button class="dr-btn date-nav__btn date-nav__btn_prev">
                                            <svg class="dr-icon dr-icon_dark">
                                                <use xlink:href="img/_src/sprite.svg#arr_left"></use>
                                            </svg>
                                        </button>
                                        <p class="date-nav__date">Сентябрь, 2020</p>
                                        <button class="dr-btn date-nav__btn date-nav__btn_next">
                                            <svg class="dr-icon dr-icon_dark">
                                                <use xlink:href="img/_src/sprite.svg#arr_right"></use>
                                            </svg>
                                        </button>
                                    </nav>
                                </div>
                                <div class="col-md-4 d-flex justify-content-end">
                                    <a href="#" class="dr-btn dr-btn_accent dr-btn_outline dr-btn_outline_normal"
                                       data-modal="modal_freezing">Заморозить</a>
                                </div>
                            </div>
                        </div>
                        <div class="page-content__body">
                            <div class="shedule-table__wrapper">
                                <div class="dr-t">
                                    <div class="dr-t-head">
                                        <div class="dr-t-row">
                                            <?php
                                                $week = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
                                                foreach ($week as $item) :
                                            ?>
                                                    <div class="dr-t-cell"><?=$item ?></div>
                                                <?php endforeach; ?>
                                        </div>
                                        <div class="dr-t-row">
                                            <div class="dr-t-cell dr-t-cell-state dr-t-cell-state_performed">
                                            </div>
                                            <div class="dr-t-cell dr-t-cell-state dr-t-cell-state_performed">
                                            </div>
                                            <div class="dr-t-cell dr-t-cell-state dr-t-cell-state_performed">
                                            </div>
                                            <div class="dr-t-cell dr-t-cell-state dr-t-cell-state_pass">
                                            </div>
                                            <div class="dr-t-cell dr-t-cell-state dr-t-cell-state_performed">
                                            </div>
                                            <div class="dr-t-cell dr-t-cell-state dr-t-cell-state_not_paid">
                                            </div>
                                            <div class="dr-t-cell dr-t-cell-state dr-t-cell-state_test_num_1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dr-t-body">
                                         <div class="dr-t-row">
                                        <?php $iRow = 1; for($i = 1; $i <= 42; $i++) :?>
                                            <?php if($iRow < 7) :?>
                                                <?php if($i <= 14) :?>
                                                <?php
                                                    $state = "";
                                                    switch($i) {
                                                        case 8:
                                                        case 9: $state = "performed"; break;
                                                        case 10: $state = "freezing"; break;
                                                    }
                                                     ?>
                                                    <div class="dr-t-cell <?=($state != "")?"dr-t-cell-state dr-t-cell-state_$state":''?>">
                                                        <div class="dr-t-cell__inner">
                                                            <div class="dr-t-cell__header">
                                                                <div class="month-day"><?=$i; ?></div>
                                                            </div>
                                                            <div class="dr-t-cell__body">
                                                                <p class="shedule-time">12:00</p>
                                                                <?php switch($iRow) {
                                                                    case 1:
                                                                    case 3:
                                                                    case 5: echo "<p data-shedule-title-full='Задание' data-shedule-title-short='З' class='shedule-title shedule-title_task'>Задание</p>"; break;
                                                                    case 2:
                                                                    case 4:
                                                                    case 6: echo "<p data-shedule-title-full='Тренировка' data-shedule-title-short='Т' class='shedule-title shedule-title_training'>Тренировка</p>"; break;
                                                                    case 7: echo "<p data-shedule-title-full='Выходной' data-shedule-title-short='В' class='shedule-title shedule-title_weekend'>Выходной</p>"; break;
                                                                } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php else : ?>
                                                        <div class="dr-t-cell">
                                                            <div class="dr-t-cell__inner">
                                                                <div class="dr-t-cell__header">
                                                                    <div class="month-day">
                                                                        <?=($i > 30)?$i-30:$i; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="dr-t-cell__body">
                                                                </div>
                                                            </div>
                                                        </div>
                                                <?php endif; ?>
                                                <?php $iRow++; ?>
                                            <?php else : ?>
                                             <?php if($i <= 14) :?>
                                                 <div class="dr-t-cell">
                                                     <div class="dr-t-cell__inner">
                                                         <div class="dr-t-cell__header">
                                                             <div class="month-day">
                                                                 <?=($i > 30)?$i-30:$i; ?>
                                                             </div>
                                                         </div>
                                                         <div class="dr-t-cell__body">
                                                             <p class="shedule-time">12:00</p>
                                                             <?php switch($iRow) {
                                                                 case 1:
                                                                 case 3:
                                                                 case 5: echo "<p data-shedule-title-full='Задание' data-shedule-title-short='З' class='shedule-title shedule-title_task'>Задание</p>"; break;
                                                                 case 2:
                                                                 case 4:
                                                                 case 6: echo "<p data-shedule-title-full='Тренировка' data-shedule-title-short='Т' class='shedule-title shedule-title_training'>Тренировка</p>"; break;
                                                                 case 7: echo "<p data-shedule-title-full='Выходной' data-shedule-title-short='В' class='shedule-title shedule-title_weekend'>Выходной</p>"; break;
                                                             } ?>
                                                         </div>
                                                     </div>
                                                 </div>
                                             <?php else : ?>
                                                 <div class="dr-t-cell">
                                                     <div class="dr-t-cell__inner">
                                                         <div class="dr-t-cell__header">
                                                             <div class="month-day">
                                                                 <?=($i > 30)?$i-30:$i; ?>
                                                             </div>
                                                         </div>
                                                         <div class="dr-t-cell__body">

                                                         </div>
                                                     </div>
                                                 </div>
                                             <?php endif; ?>
                                                    </div>
                                                     <div class="dr-t-row">
                                                     <?php $iRow = 1; ?>
                                            <?php endif; ?>

                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="dr-t-legend__list d-flex d-md-none mt-20">
                                    <p class="dr-t-legend__item c-dark">
                                        <span class="dr-t-legend__title">
                                            <span class="c-accent_darken">З</span> - Задание
                                        </span>
                                    </p>
                                    <p class="dr-t-legend__item c-dark">
                                        <span class="dr-t-legend__title">
                                             <span class="c-accent_darker">Т</span> - Тренировка
                                        </span>
                                    </p>
                                    <p class="dr-t-legend__item c-dark">
                                        <span class="dr-t-legend__title">
                                            <span class="c-accent_lighten">В</span> - Выходной
                                        </span>
                                    </p>
                                </div>
                                <div class="dr-t-legend__list">
                                    <div class="dr-t-legend__item">
                                        <div class="dr-t-legend__state state-shedule_freezing"></div>
                                        <p class="dr-t-legend__title">Заморозка</p>
                                    </div>
                                    <div class="dr-t-legend__item">
                                        <div class="dr-t-legend__state state-shedule_pass"></div>
                                        <p class="dr-t-legend__title">Пропуск</p>
                                    </div>
                                    <div class="dr-t-legend__item">
                                        <div class="dr-t-legend__state state-shedule_performed"></div>
                                        <p class="dr-t-legend__title">Выполнено</p>
                                    </div>
                                    <div class="dr-t-legend__item">
                                        <div class="dr-t-legend__state state-shedule_not_paid"></div>
                                        <p class="dr-t-legend__title">Заморозка</p>
                                    </div>
                                    <div class="dr-t-legend__item">
                                        <div class="dr-t-legend__state state-shedule_freezing"></div>
                                        <p class="dr-t-legend__title">Не оплачено</p>
                                    </div>
                                    <div class="dr-t-legend__item">
                                        <div class="dr-t-legend__state state-shedule_test_num_1"></div>
                                        <p class="dr-t-legend__title">Тест №1</p>
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
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelector('.dr-t').classList.add('hovered');
        document
            .querySelector('.dr-t')
            .querySelector('.dr-t-body')
            .querySelectorAll('.dr-t-row')[1]
            .classList
            .add('hovered');
    });

</script>
<?php
require_once("foot.php");
?>
