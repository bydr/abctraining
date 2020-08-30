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
                                             <p class="dr-text__big fw-normal mb-20">Ваш баланс:</p>
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
                                                         4
                                                     </p>
                                                 </div>
                                             </div>
                                            <p class="dr-text__small mt-15">*тренировка будет списана с баланса в 00:00</p>
                                         </div>
                                         <div class="training-total__image">
                                             <img src="img/_src/t_missed.png" alt="">
                                             <p class="dr-h4 fw-normal c-accent_darker">Тренировка пропущена</p>
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
