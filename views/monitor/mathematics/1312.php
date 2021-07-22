<?php

/* @var $this yii\web\View */

$title = '1312'; //НОМЕР КАБИНЕТА
$room_lesson = 'КАБИНЕТ МАТЕМАТИКИ'; //НАЗВАНИЕ КАБИНЕТА
$l_block = 'РАСПИСАНИЕ'; //ЛЕВЫЙ БЛОК
$r_block = 'В ЭТОТ ДЕНЬ РОДИЛИСЬ'; //ПРАВЫЙ БЛОК
$m_block_1 = 'КРАСОТА МАТЕМАТИКИ'; //СРЕДНИЙ БЛОК 1
$m_block_2 = 'ИНТЕРЕСНЫЕ ФАКТЫ'; //СРЕДНИЙ БЛОК 2
$fs_block = 'А.Н. Кадрова'; //ОТВЕТСТВЕННЫЙ ЗА ПОЖАРНУЮ БЕЗОПАСНОСТЬ
$facts_text = 'docs/math.txt'; //ИМЯ ФАЙЛА С ТЕКСТОМ ДЛЯ БЕГУЩЕЙ СТРОКИ

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

            <?php foreach ($lessons as $lesson): ?>

                <?php if ($lesson->getRoomNumber() == $title) { ?>
                    <p> <?php echo $lesson->subject_seq . '. '; ?><?php echo $lesson->subject_name; ?>
                        <?php echo '(' . $lesson->getClassName() . ')'; ?></p>

                <?php } ?>

            <?php endforeach; ?>

            </p>
            <div id="lesson" style="color: #ff0;">Идет - урок</div>
            <div id="lesson-time" style="color: #ff0;">До окончания: -- минут</div>
        </div>

        <div class="info_block">
            <div id="2" style="color: #ff0;"><?= $r_block ?></div>
            </p>
            <img id="slide" height="626px">
        </div>
    </div>
</div>

<div class="tasks_block">
    <div id="3" style="color: #ff0;"><?= $m_block_1 ?></div>
    <video id="video" autoplay loop muted style="width: 98%; height: 50%;">
        <source src= <?= Yii::getAlias('@web') . "/img/vid2.mp4" ?>>
    </video>

    <div id="4" style="color: #ff0;"><?= $m_block_2 ?></div>

    <marquee behavior="" ; direction="up" ; scrollamount="2" height="34%">
        <ul>
            <?php
            if(file_exists($facts_text)) {

                $content = file($facts_text, FILE_IGNORE_NEW_LINES && FILE_SKIP_EMPTY_LINES);
                foreach ($content as $line) {
                    echo('<li>' . $line . '</li>');
                }
            }
            ?>
        </ul>
    </marquee>

</div>

<div class="fire-safety_block">
    <b>&nbsp;Ответственный за пожарную безопасность:</b> <span id="fs" style="color: #ffffff;"><?= $fs_block ?></span>
</div>
