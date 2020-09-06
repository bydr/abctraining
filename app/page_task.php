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
                            </div>
                            <div class="col">
                                <h1 class="page-content__title dr-h1 text-center">Задание</h1>
                            </div>
                            <div class="col-md-4 justify-content-end d-none d-md-flex">
                            </div>
                        </div>
                        <div class="page-content__body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="tasks-items">
                                        <div class="task-item row d-flex flex-column-reverse flex-lg-row">
                                            <div class="col-12 col-md-12 col-lg-7">
                                                <div class="video-wrapper">
                                                    <div class="video-preview"
                                                         style="background-image:url(img/_src/video_preview.jpg);">
                                                        <button class="dr-btn dr-btn_box video-btn_play">
                                                            <svg class="dr-icon dr-icon_big dr-icon_white">
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
                                            <div class="col-12 col-md-12 col-lg-5">
                                                <div class="task-item__info">
                                                    <div class="task-item__info_inner">
                                                        <div class="task-item__title">
                                                            <p class="">Отжимания</p>
                                                        </div>
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
                                            <span class="checkbox-text">Первый подход - 20 раз</span>
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
                                            <span class="checkbox-text">Второй подход - 10 раз</span>
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
                                            <span class="checkbox-text">Третий подход - 5 раз</span>
                                        </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="task-item row d-flex flex-column-reverse flex-lg-row">
                                            <div class="col-12 col-md-12 col-lg-7">
                                                <div class="video-wrapper">
                                                    <div class="video-preview"
                                                         style="background-image:url(img/_src/video_preview.jpg);">
                                                        <button class="dr-btn dr-btn_box video-btn_play">
                                                            <svg class="dr-icon dr-icon_big dr-icon_white">
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
                                            <div class="col-12 col-md-12 col-lg-5">
                                                <div class="task-item__info">
                                                    <div class="task-item__info_inner">
                                                        <div class="task-item__title">
                                                            <p class="">Планка</p>
                                                        </div>
                                                        <div class="task-item__controls">
                                                            <div class="checkbox-list checkbox-list__timer">
                                                                <div class="checkbox-timer__panel">
                                                                    <label class="checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="checkbox-inner">
                                            <span class="checkbox-box">
                                                <svg class="dr-icon dr-icon_white">
                                                    <use xlink:href="img/_src/sprite.svg#check"></use>
                                                </svg>
                                            </span>
                                            <span class="checkbox-text">Первый подход - 10 сек (левая нога вверх)</span>
                                        </span>
                                                                    </label>
                                                                    <div class="timer-task">
                                                                        <p class="timer-task__value"
                                                                        data-begin-time="00:00:10">00:00:10</p>
                                                                        <div class="timer-task__controls">
                                                                            <button class="dr-btn dr-btn_accent timer-task__btn_start is-active">Старт</button>
                                                                            <button class="dr-btn dr-btn_accent timer-task__btn_stop">Стоп</button>
                                                                            <button class="dr-btn dr-btn_outline timer-task__btn_repeat">Заново</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="checkbox-timer__panel">
                                                                    <label class="checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="checkbox-inner">
                                            <span class="checkbox-box">
                                                <svg class="dr-icon dr-icon_white">
                                                    <use xlink:href="img/_src/sprite.svg#check"></use>
                                                </svg>
                                            </span>
                                            <span class="checkbox-text">Первый подход - 10 сек (левая нога вверх)</span>
                                        </span>
                                                                    </label>
                                                                    <div class="timer-task">
                                                                        <p class="timer-task__value"
                                                                           data-begin-time="00:00:10">00:00:10</p>
                                                                        <div class="timer-task__controls">
                                                                            <button class="dr-btn dr-btn_accent timer-task__btn_start is-active">Старт</button>
                                                                            <button class="dr-btn dr-btn_accent timer-task__btn_stop">Стоп</button>
                                                                            <button class="dr-btn dr-btn_outline timer-task__btn_repeat">Заново</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="checkbox-timer__panel">
                                                                    <label class="checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="checkbox-inner">
                                            <span class="checkbox-box">
                                                <svg class="dr-icon dr-icon_white">
                                                    <use xlink:href="img/_src/sprite.svg#check"></use>
                                                </svg>
                                            </span>
                                            <span class="checkbox-text">Первый подход - 10 сек (левая нога вверх)</span>
                                        </span>
                                                                    </label>
                                                                    <div class="timer-task">
                                                                        <p class="timer-task__value"
                                                                           data-begin-time="00:00:10">00:00:10</p>
                                                                        <div class="timer-task__controls">
                                                                            <button class="dr-btn dr-btn_accent timer-task__btn_start is-active">Старт</button>
                                                                            <button class="dr-btn dr-btn_accent timer-task__btn_stop">Стоп</button>
                                                                            <button class="dr-btn dr-btn_outline timer-task__btn_repeat">Заново</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="checkbox-timer__panel">
                                                                    <label class="checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="checkbox-inner">
                                            <span class="checkbox-box">
                                                <svg class="dr-icon dr-icon_white">
                                                    <use xlink:href="img/_src/sprite.svg#check"></use>
                                                </svg>
                                            </span>
                                            <span class="checkbox-text">Первый подход - 10 сек (левая нога вверх)</span>
                                        </span>
                                                                    </label>
                                                                    <div class="timer-task">
                                                                        <p class="timer-task__value"
                                                                           data-begin-time="00:00:10">00:00:10</p>
                                                                        <div class="timer-task__controls">
                                                                            <button class="dr-btn dr-btn_accent timer-task__btn_start is-active">Старт</button>
                                                                            <button class="dr-btn dr-btn_accent timer-task__btn_stop">Стоп</button>
                                                                            <button class="dr-btn dr-btn_outline timer-task__btn_repeat">Заново</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="checkbox-timer__panel">
                                                                    <label class="checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="checkbox-inner">
                                            <span class="checkbox-box">
                                                <svg class="dr-icon dr-icon_white">
                                                    <use xlink:href="img/_src/sprite.svg#check"></use>
                                                </svg>
                                            </span>
                                            <span class="checkbox-text">Первый подход - 10 сек (левая нога вверх)</span>
                                        </span>
                                                                    </label>
                                                                    <div class="timer-task">
                                                                        <p class="timer-task__value"
                                                                           data-begin-time="00:00:10">00:00:10</p>
                                                                        <div class="timer-task__controls">
                                                                            <button class="dr-btn dr-btn_accent timer-task__btn_start is-active">Старт</button>
                                                                            <button class="dr-btn dr-btn_accent timer-task__btn_stop">Стоп</button>
                                                                            <button class="dr-btn dr-btn_outline timer-task__btn_repeat">Заново</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="checkbox-timer__panel">
                                                                    <label class="checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="checkbox-inner">
                                            <span class="checkbox-box">
                                                <svg class="dr-icon dr-icon_white">
                                                    <use xlink:href="img/_src/sprite.svg#check"></use>
                                                </svg>
                                            </span>
                                            <span class="checkbox-text">Первый подход - 10 сек (левая нога вверх)</span>
                                        </span>
                                                                    </label>
                                                                    <div class="timer-task">
                                                                        <p class="timer-task__value"
                                                                           data-begin-time="00:00:10">00:00:10</p>
                                                                        <div class="timer-task__controls">
                                                                            <button class="dr-btn dr-btn_accent timer-task__btn_start is-active">Старт</button>
                                                                            <button class="dr-btn dr-btn_accent timer-task__btn_stop">Стоп</button>
                                                                            <button class="dr-btn dr-btn_outline timer-task__btn_repeat">Заново</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="task-item row d-flex flex-column-reverse flex-lg-row">
                                            <div class="col-12 col-md-12 col-lg-7">
                                                <div class="video-wrapper">
                                                    <div class="video-preview"
                                                         style="background-image:url(img/_src/video_preview.jpg);">
                                                        <button class="dr-btn dr-btn_box video-btn_play">
                                                            <svg class="dr-icon dr-icon_big dr-icon_white">
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
                                            <div class="col-12 col-md-12 col-lg-5">
                                                <div class="task-item__info">
                                                    <div class="task-item__info_inner">
                                                        <div class="task-item__title">
                                                            <p class="">Жонглирование</p>
                                                        </div>
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
                                            <span class="checkbox-text">Одним предметом двумя руками в удобную сторону</span>
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
                                            <span class="checkbox-text">Одним предметом двумя руками в удобную сторону</span>
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
                                            <span class="checkbox-text">Одним предметом двумя руками в удобную сторону</span>
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
                                            <span class="checkbox-text">Одним предметом двумя руками в удобную сторону</span>
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
                                            <span class="checkbox-text">Одним предметом двумя руками в удобную сторону</span>
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
                                            <span class="checkbox-text">Одним предметом двумя руками в удобную сторону</span>
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
                                            <span class="checkbox-text">Одним предметом двумя руками в удобную сторону</span>
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
                                            <span class="checkbox-text">Одним предметом двумя руками в удобную сторону</span>
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
                                            <span class="checkbox-text">Одним предметом двумя руками в удобную сторону</span>
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
                                            <span class="checkbox-text">Одним предметом двумя руками в удобную сторону</span>
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
                                            <span class="checkbox-text">Одним предметом двумя руками в удобную сторону</span>
                                        </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="task-item row d-flex flex-column-reverse flex-lg-row">
                                            <div class="col-12 col-md-12 col-lg-7">
                                                <div class="video-wrapper">
                                                    <div class="video-preview"
                                                         style="background-image:url(img/_src/video_preview.jpg);">
                                                        <button class="dr-btn dr-btn_box video-btn_play">
                                                            <svg class="dr-icon dr-icon_big dr-icon_white">
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
                                            <div class="col-12 col-md-12 col-lg-5">
                                                <div class="task-item__info">
                                                    <div class="task-item__info_inner">
                                                        <div class="d-flex justify-content-end mb-20">
                                                            <div class="tooltip tooltip-custom"
                                                                    data-tooltip-c-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, non!"><span class="tooltip-custom__btn">!</span></div>
                                                        </div>
                                                        <div class="task-item__title">
                                                            <p class="">Шпагат у шведской стенки - 1 (правая нога)</p>
                                                        </div>
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
                                            <span class="checkbox-text">Спина и опорная нога на одной прямой, задержаться - 10 секунд</span>
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
                                            <span class="checkbox-text">Спина и опорная нога на одной прямой, задержаться - 10 секунд</span>
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
                                            <span class="checkbox-text">Спина и опорная нога на одной прямой, задержаться - 10 секунд</span>
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
                                            <span class="checkbox-text">Спина и опорная нога на одной прямой, задержаться - 10 секунд</span>
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
