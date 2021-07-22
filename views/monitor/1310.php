<?php

/* @var $this yii\web\View */

$title = '1310'; //НОМЕР КАБИНЕТА
$room_lesson = 'ЗАМ. ДИР. по МЕТОД. РАБОТЕ'; //НАЗВАНИЕ КАБИНЕТА
$l_block = 'ГРАФИК РАБОТЫ'; //ЛЕВЫЙ БЛОК
$r_block = 'ОБРАЗОВАТЕЛЬНЫЕ РЕСУРСЫ'; //ПРАВЫЙ БЛОК
$m_block_1 = '10 ЛУЧШИХ ШКОЛ В МИРЕ'; //СРЕДНИЙ БЛОК 1
$m_block_2 = ''; //СРЕДНИЙ БЛОК 2
$fs_block = 'Ю.В. Варламова'; //ОТВЕТСТВЕННЫЙ ЗА ПОЖАРНУЮ БЕЗОПАСНОСТЬ

$this->title = $title;
?>

<div class="container-fluid">
    <div class="row">
        <div class="room_block">
            <div class="room_number"><?= $title ?></div>
            <div class="room_name"><?= $room_lesson ?></div>
        </div>

        <div class="schedule_block">
            <div id="1" style="color: #ff0; font-size: 35px;"><?= $l_block ?></div>
            </p>

            <p>
                ПН-ПТ 08:30-17:30
            </p>
            <p>
                ОБЕД 12:00-13:00
            </p>

            </p>
            <div id="lesson" style="color: #ff0;">Идет - урок</div>
            <div id="lesson-time" style="color: #ff0;">До окончания: -- минут</div>
        </div>

        <div class="info_block">
            <div id="2" style="color: #ff0;"><?= $r_block ?></div>
            </p>
            <img id="soc" height="380px" src=<?= Yii::getAlias('@web') . "/img/obr.png" ?>>
        </div>
    </div>
</div>

<div class="tasks_block">

    <div id="3" style="color: #ff0;"><?= $m_block_1 ?></div>
    <video id="video" autoplay loop muted style="width: 98%; height: 50%;">
        <source src= <?= Yii::getAlias('@web') . "/img/sc.mp4" ?>>
    </video>

    <div id="4" style="color: #ff0;"><?= $m_block_2 ?></div>

    <marquee behavior="" ; direction="up" ; scrollamount="2" height="37%">
        <ul>

        </ul>
    </marquee>

</div>

<div class="fire-safety_block">
    <b>&nbsp;Ответственный за пожарную безопасность:</b> <span id="fs" style="color: #ffffff;"><?= $fs_block ?></span>
</div>
