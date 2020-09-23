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
                        <div class="page-content__body">
                            <div class="row">
                                <div class="col-12">
                                     <div class="training-total">
                                         <div class="training-total__balance">
                                             <p class="dr-h3 fw-normal mb-20">Ваш баланс:</p>
                                             <div class="t-balance_items">
                                                 <div class="t-balance_item">
                                                     <svg class="dr-icon">
                                                         <use xlink:href="img/_src/sprite.svg#training"></use>
                                                     </svg>
                                                     <p class="t-balance_item__title">
                                                         Тренировки:
                                                     </p>
                                                     <p class="t-balance_item__val">
                                                         4
                                                     </p>
                                                 </div>
                                                 <div class="t-balance_item">
                                                     <svg class="dr-icon">
                                                         <use xlink:href="img/_src/sprite.svg#tasks"></use>
                                                     </svg>
                                                     <p class="t-balance_item__title">
                                                         Задания:
                                                     </p>
                                                     <p class="t-balance_item__val">
                                                         4
                                                     </p>
                                                 </div>
                                                 <div class="t-balance_item">
                                                     <svg class="dr-icon">
                                                         <use xlink:href="img/_src/sprite.svg#pause"></use>
                                                     </svg>
                                                     <p class="t-balance_item__title">
                                                         Заморозка:
                                                     </p>
                                                     <p class="t-balance_item__val">
                                                         24
                                                     </p>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                    <div class="balance-plan">
                                        <div class="balance-plan__title text-center w-100 mt-20 mb-40">
                                            <p class="dr-h4">Пополнение баланса:</p>
                                        </div>
                                        <div class="balance-items">
                                            <div class="col-12 col-sm-6 col-lg-5 col-xl-3">
                                                <div class="balance-item">
                                                    <div class="balance-item__header">
                                                        <p class="balance-item__title">Standart</p>
                                                    </div>
                                                    <div class="balance-item__body">
                                                        <p class="balance-item__price">
                                                            <sup class="balance-item__price_currency">$</sup>
                                                            <span class="balance-item__price_val">42</span>
                                                        </p>
                                                        <div class="balance-item__terms">
                                                            <div class="balance-item__term_item">
                                                                <span class="term_title dr-text__normal">Тренировки:</span>
                                                                <span class="term_val dr-text__big c-accent_darken">12</span>
                                                            </div>
                                                            <div class="balance-item__term_item">
                                                                <span class="term_title dr-text__normal">Задания:</span>
                                                                <span class="term_val dr-text__big c-accent_darken">12</span>
                                                            </div>
                                                            <div class="balance-item__term_item">
                                                                <span class="term_title dr-text__normal">Заморозка:</span>
                                                                <span class="term_val dr-text__big c-accent_darken">12</span>
                                                            </div>
                                                        </div>
                                                        <div class="w-100 text-center mt-20">
                                                            <button class="dr-btn dr-btn_accent">Оплатить</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-5 col-xl-3">
                                                <div class="balance-item">
                                                    <div class="balance-item__header">
                                                        <p class="balance-item__title">Standart x 3</p>
                                                    </div>
                                                    <div class="balance-item__body">
                                                        <p class="balance-item__price">
                                                            <span class="balance-item__price_old">123</span>
                                                            <sup class="balance-item__price_currency">$</sup>
                                                            <span class="balance-item__price_val">42</span>
                                                            <span class="price-state price-state_best">best-price</span>
                                                        </p>
                                                        <div class="balance-item__terms">
                                                            <div class="balance-item__term_item">
                                                                <span class="term_title dr-text__normal">Тренировки:</span>
                                                                <span class="term_calc dr-text__normal">12x3= </span>
                                                                <span class="term_val dr-text__big c-accent_darken">12</span>
                                                            </div>
                                                            <div class="balance-item__term_item">
                                                                <span class="term_title dr-text__normal">Задания:</span>
                                                                <span class="term_calc dr-text__normal">12x3= </span>
                                                                <span class="term_val dr-text__big c-accent_darken">12</span>
                                                            </div>
                                                            <div class="balance-item__term_item">
                                                                <span class="term_title dr-text__normal">Заморозка:</span>
                                                                <span class="term_calc dr-text__normal">12x3= </span>
                                                                <span class="term_val dr-text__big c-accent_darken">12</span>
                                                            </div>
                                                        </div>
                                                        <div class="w-100 text-center mt-20">
                                                            <button class="dr-btn dr-btn_accent">Оплатить</button>
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
