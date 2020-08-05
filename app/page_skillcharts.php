<?php
require_once("head.php");
?>

<div class="page">
    <div class="container-fluid">
        <div class="row">
            <?php include "sidebar.php" ?>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-10">
                <div class="page-content">
                    <?php include "header.php" ?>
                    <div class="page-content__inner">
                        <div class="page-content__header">
                            <div class="col-md-3 d-flex justify-content-start">
                                <div class="dropdown">
                                    <div class="dropdown-header">
                                        <p class="dr-text__big c-accent">
                                            Total level:
                                            <span class="dr-h3 c-accent_darken">0</span>
                                        </p>
                                    </div>
                                    <div class="dropdown-drop">
                                        <div class="skillchart-total">
                                            <div class="skillchart-total__row">
                                                <p class="skillchart-total__title">С</p>
                                                <p class="skillchart-total__val">1 - 34</p>
                                            </div>
                                            <div class="skillchart-total__row">
                                                <p class="skillchart-total__title">B3</p>
                                                <p class="skillchart-total__val">1 - 34</p>
                                            </div>
                                            <div class="skillchart-total__row">
                                                <p class="skillchart-total__title">B2</p>
                                                <p class="skillchart-total__val">1 - 34</p>
                                            </div>
                                            <div class="skillchart-total__row is-active">
                                                <p class="skillchart-total__title">B1</p>
                                                <p class="skillchart-total__val">1 - 34</p>
                                            </div>
                                            <div class="skillchart-total__row">
                                                <p class="skillchart-total__title">A</p>
                                                <p class="skillchart-total__val">1 - 34</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <h1 class="page-content__title dr-h1 text-center">Skills chart</h1>
                            </div>
                            <div class="col-md-3 d-flex justify-content-end">
                                <nav class="date-nav">
                                    <button class="dr-btn date-nav__btn date-nav__btn_prev">
                                        <svg class="dr-icon">
                                            <use xlink:href="img/_src/sprite.svg#arr_left"></use>
                                        </svg>
                                    </button>
                                    <p class="date-nav__date">10.09.2020</p>
                                    <button class="dr-btn date-nav__btn date-nav__btn_next">
                                        <svg class="dr-icon">
                                            <use xlink:href="img/_src/sprite.svg#arr_right"></use>
                                        </svg>
                                    </button>
                                </nav>
                            </div>
                        </div>
                        <div class="page-content__body">
                            <div class="skillcharts-grids">
                                <div class="col-12 col-md-12 col-xl-6">
                                    <div class="skillcharts-grid">
                                        <div class="skillcharts-grid__header">
                                            <div class="skillcharts-grid__title">Физическая сила</div>
                                            <div class="skillcharts-grid__level">
                                                <span class="dr-text__normal">level:</span>
                                                <span class="skillcharts-grid__level_val c-secondary">0</span>
                                            </div>
                                        </div>
                                        <div class="skillcharts-grid__body customscroll">
                                            <div class="custom-scroll-pretty_track-y"></div>
                                            <div class="custom-scroll-pretty_track-x"></div>

                                            <table class="skillcharts-grid__table">
                                                <thead class="skillcharts-grid__table_head">
                                                <tr>
                                                    <th></th>
                                                    <th>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title text-center">C</p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title text-center">B3</p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title text-center">B2</p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title text-center">B1</p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title text-center">A</p>
                                                        </div>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="skillcharts-grid__table_body">
                                                <tr>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title">Пресс</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title">Пресс</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title">Пресс</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title">Отжимания</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra">волной
                                                                        ровные
                                                                        ноги</p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra">волной
                                                                        ровные
                                                                        ноги</p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra">волной
                                                                        ровные
                                                                        ноги</p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra">волной
                                                                        ровные
                                                                        ноги</p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra">волной
                                                                        ровные
                                                                        ноги</p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="skillcharts-grid">
                                        <div class="skillcharts-grid__header">
                                            <div class="skillcharts-grid__title">Выносливость</div>
                                            <div class="skillcharts-grid__level">
                                                <span class="dr-text__normal">level:</span>
                                                <span class="skillcharts-grid__level_val c-secondary">0</span>
                                            </div>
                                        </div>
                                        <div class="skillcharts-grid__body customscroll">
                                            <div class="custom-scroll-pretty_track-y"></div>
                                            <div class="custom-scroll-pretty_track-x"></div>

                                            <table class="skillcharts-grid__table">
                                                <thead class="skillcharts-grid__table_head">
                                                <tr>
                                                    <th></th>
                                                    <th>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title text-center">C</p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title text-center">B3</p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title text-center">B2</p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title text-center">B1</p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title text-center">A</p>
                                                        </div>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="skillcharts-grid__table_body">
                                                <tr>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title">Пресс</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title">Пресс</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title">Пресс</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="skillcharts-grid">
                                        <div class="skillcharts-grid__header">
                                            <div class="skillcharts-grid__title">Координация</div>
                                            <div class="skillcharts-grid__level">
                                                <span class="dr-text__normal">level:</span>
                                                <span class="skillcharts-grid__level_val c-secondary">0</span>
                                            </div>
                                        </div>
                                        <div class="skillcharts-grid__body customscroll">
                                            <div class="custom-scroll-pretty_track-y"></div>
                                            <div class="custom-scroll-pretty_track-x"></div>

                                            <table class="skillcharts-grid__table">
                                                <thead class="skillcharts-grid__table_head">
                                                <tr>
                                                    <th></th>
                                                    <th>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title text-center">C</p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title text-center">B3</p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title text-center">B2</p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title text-center">B1</p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title text-center">A</p>
                                                        </div>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="skillcharts-grid__table_body">
                                                <tr>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title">Пресс</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title">Пресс</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl">удоб</div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl">против</div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl">удоб</div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl">против</div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl">удоб</div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl">против</div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl">удоб</div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl">против</div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl">удоб</div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl">против</div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="skillcharts-grid">
                                        <div class="skillcharts-grid__header">
                                            <div class="skillcharts-grid__title">Скорость</div>
                                            <div class="skillcharts-grid__level">
                                                <span class="dr-text__normal">level:</span>
                                                <span class="skillcharts-grid__level_val c-secondary">0</span>
                                            </div>
                                        </div>
                                        <div class="skillcharts-grid__body customscroll">
                                            <div class="custom-scroll-pretty_track-y"></div>
                                            <div class="custom-scroll-pretty_track-x"></div>

                                            <table class="skillcharts-grid__table">
                                                <thead class="skillcharts-grid__table_head">
                                                <tr>
                                                    <th></th>
                                                    <th>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title text-center">C</p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title text-center">B3</p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title text-center">B2</p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title text-center">B1</p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title text-center">A</p>
                                                        </div>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="skillcharts-grid__table_body">
                                                <tr>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title">Бег на месте</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <div class="block-stat">
                                                                <div class="block-stat__row">
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                    <div class="block-stat__item">
                                                                        <div class="block-stat__val">10</div>
                                                                        <div class="block-stat__lbl"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-stat__row"><p
                                                                            class="dr-text__small_extra"></p></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 col-xl-6">
                                    <div class="skillcharts-grid">
                                        <div class="skillcharts-grid__header">
                                            <div class="skillcharts-grid__title">Скорость</div>
                                            <div class="skillcharts-grid__level">
                                                <span class="dr-text__normal">level:</span>
                                                <span class="skillcharts-grid__level_val c-secondary">0</span>
                                            </div>
                                        </div>
                                        <div class="skillcharts-grid__body customscroll">
                                            <div class="custom-scroll-pretty_track-y"></div>
                                            <div class="custom-scroll-pretty_track-x"></div>

                                            <table class="skillcharts-grid__table">
                                                <thead class="skillcharts-grid__table_head">
                                                <tr>
                                                    <th></th>
                                                    <th>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title text-center">C</p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title text-center">B3</p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title text-center">B2</p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title text-center">B1</p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title text-center">A</p>
                                                        </div>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="skillcharts-grid__table_body">
                                                <tr>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title">Бег на месте</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>касание
                                                                пальцами</p>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title">Бег на месте</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>касание
                                                                пальцами</p>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title">Бег на месте</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>касание
                                                                пальцами</p>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title">Бег на месте</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>касание
                                                                пальцами</p>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title">Бег на месте</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>касание
                                                                пальцами</p>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title">Бег на месте</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>касание
                                                                пальцами</p>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title">Бег на месте</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>касание
                                                                пальцами</p>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title">Бег на месте</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>касание
                                                                пальцами</p>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title">Бег на месте</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>касание
                                                                пальцами</p>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class="table-cell__body_title">Бег на месте</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>касание
                                                                пальцами</p>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-cell__inner">
                                                            <p class='table-cell__text text-center'>без касания
                                                                пола</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
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
