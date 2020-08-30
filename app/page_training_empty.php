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
                                    <div class="content-full-height d-flex flex-column align-items-center justify-content-center">
                                        <h1 class="dr-h1 mb-20">Тренировка</h1>
                                        <h2 class="dr-h2 mb-40">будет доступна через:</h2>
                                        <div class="panel-time">
                                            01 : 30 : 21
                                        </div>
                                        <a href="#" class="c-accent dr-text__small link-hover_color mt-40"
                                           data-modal="modal_delay_workout">
                                            Перенести тренировку
                                        </a>
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
echo file_get_contents('modal_delay_workout.php');
require_once("foot.php");
?>
